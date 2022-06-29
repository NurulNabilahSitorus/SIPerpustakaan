<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kembali extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("kembali_model");
		$this->load->library('form_validation');
		$this->load->model("user_model");
	if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
}

    public function index()
    {
    	$data["pengembalian_buku"] = $this->kembali_model->getAll(); //ambil data dari model
    	$this->load->view("admin/kembali/list", $data); //kirim data ke view
    }

    public function add()
	{
    	$kembali = $this->kembali_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($kembali->rules()); //terapkan rules

    	if ($validation->run()) { //melakukan validasi
    		$kembali->save(); //simpan data ke database
    		$this->session->set_flashdata('success', 'Data Berhasil di Simpan'); //tampilkan pesan berhasil
    		redirect('admin/kembali');
    	}

    	$this->load->view("admin/kembali/new_form"); //tampilkan form add
    }

    public function edit($id = null) //berikan null agar mudak dicek
    {
    	if (!isset($id)) redirect('admin/kembali'); //redirect jika tidak ada $id

    	$kembali = $this->kembali_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($kembali->rules()); //terapkan rules

    	if ($validation->run()){ //melakukan validasi
    		$kembali->update(); //menyimpan data
    		$this->session->set_flashdata('success', 'Data Berhasil di Update');
    		redirect('admin/kembali');
        }

        $data["kembali"] = $kembali->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["kembali"]) show_404(); //jika tidak ada data, tampilan error 404

        $this->load->view("admin/kembali/edit_form", $data); //menampilkan form edit
    }

    public function delete($id=null)
    {
    	if(!isset($id)) show_404();

    	if($this->kembali_model->delete($id)) {
    	    $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
    		redirect(site_url('admin/kembali'));
    	}
    }
}