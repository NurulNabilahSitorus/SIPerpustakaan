<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("buku_model");
		$this->load->library('form_validation');
		$this->load->model("user_model");
	if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
}

    public function index()
    {
    	$data["buku"] = $this->buku_model->getAll(); //ambil data dari model
    	$this->load->view("admin/buku/list", $data); //kirim data ke view
    }

    public function add()
	{
    	$buku = $this->buku_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($buku->rules()); //terapkan rules

    	if ($validation->run()) { //melakukan validasi
    		$buku->save(); //simpan data ke database
    		$this->session->set_flashdata('success', 'Data Berhasil di Simpan'); //tampilkan pesan berhasil
    		redirect('admin/buku');
    	}

    	$this->load->view("admin/buku/new_form"); //tampilkan form add
    }

    public function edit($id = null) //berikan null agar mudak dicek
    {
    	if (!isset($id)) redirect('admin/buku'); //redirect jika tidak ada $id

    	$buku = $this->buku_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($buku->rules()); //terapkan rules

    	if ($validation->run()){ //melakukan validasi
    		$buku->update(); //menyimpan data
    		$this->session->set_flashdata('success', 'Data Berhasil di Update');
    		redirect('admin/buku');
        }

        $data["buku"] = $buku->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["buku"]) show_404(); //jika tidak ada data, tampilan error 404

        $this->load->view("admin/buku/edit_form", $data); //menampilkan form edit
    }

    public function delete($id=null)
    {
    	if(!isset($id)) show_404();

    	if($this->buku_model->delete($id)) {
    	    $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
    		redirect(site_url('admin/buku'));
    	}
    }
}