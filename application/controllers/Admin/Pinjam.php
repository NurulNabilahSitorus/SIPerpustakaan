<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("pinjam_model");
		$this->load->library('form_validation');
		$this->load->model("user_model");
	if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
}

    public function index()
    {
    	$data["peminjaman_buku"] = $this->pinjam_model->getAll(); //ambil data dari model
    	$this->load->view("admin/pinjam/list", $data); //kirim data ke view
    }

    public function add()
	{
    	$pinjam = $this->pinjam_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($pinjam->rules()); //terapkan rules

    	if ($validation->run()) { //melakukan validasi
    		$pinjam->save(); //simpan data ke database
    		$this->session->set_flashdata('success', 'Data Berhasil di Simpan'); //tampilkan pesan berhasil
    		redirect('admin/pinjam');
    	}

    	$this->load->view("admin/pinjam/new_form"); //tampilkan form add
    }

    public function edit($id = null) //berikan null agar mudak dicek
    {
    	if (!isset($id)) redirect('admin/pinjam'); //redirect jika tidak ada $id

    	$pinjam = $this->pinjam_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($pinjam->rules()); //terapkan rules

    	if ($validation->run()){ //melakukan validasi
    		$pinjam->update(); //menyimpan data
    		$this->session->set_flashdata('success', 'Data Berhasil di Update');
    		redirect('admin/pinjam');
        }

        $data["pinjam"] = $pinjam->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["pinjam"]) show_404(); //jika tidak ada data, tampilan error 404

        $this->load->view("admin/pinjam/edit_form", $data); //menampilkan form edit
    }

    public function delete($id=null)
    {
    	if(!isset($id)) show_404();

    	if($this->pinjam_model->delete($id)) {
    	    $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
    		redirect(site_url('admin/pinjam'));
    	}
    }
}