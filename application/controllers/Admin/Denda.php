<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Denda extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("denda_model");
		$this->load->library('form_validation');
		$this->load->model("user_model");
	if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
}

    public function index()
    {
    	$data["denda"] = $this->denda_model->getAll(); //ambil data dari model
    	$this->load->view("admin/denda/list", $data); //kirim data ke view
    }

    public function add()
	{
    	$denda = $this->denda_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($denda->rules()); //terapkan rules

    	if ($validation->run()) { //melakukan validasi
    		$denda->save(); //simpan data ke database
    		$this->session->set_flashdata('success', 'Data Berhasil di Simpan'); //tampilkan pesan berhasil
    		redirect('admin/denda');
    	}

    	$this->load->view("admin/denda/new_form"); //tampilkan form add
    }

    public function edit($id = null) //berikan null agar mudak dicek
    {
    	if (!isset($id)) redirect('admin/denda'); //redirect jika tidak ada $id

    	$denda= $this->denda_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($denda->rules()); //terapkan rules

    	if ($validation->run()){ //melakukan validasi
    		$denda->update(); //menyimpan data
    		$this->session->set_flashdata('success', 'Data Berhasil di Update');
    		redirect('admin/denda');
        }

        $data["denda"] = $denda->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["denda"]) show_404(); //jika tidak ada data, tampilan error 404

        $this->load->view("admin/denda/edit_form", $data); //menampilkan form edit
    }

    public function delete($id=null)
    {
    	if(!isset($id)) show_404();

    	if($this->denda_model->delete($id)) {
    	    $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
    		redirect(site_url('admin/denda'));
    	}
    }
}