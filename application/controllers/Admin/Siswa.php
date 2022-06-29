<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("siswa_model");
		$this->load->library('form_validation');
		$this->load->model("user_model");
	if($this->user_model->isNotLogin()) redirect(site_url('admin/login'));
}

    public function index()
    {
    	$data["siswa"] = $this->siswa_model->getAll(); //ambil data dari model
    	$this->load->view("admin/siswa/list", $data); //kirim data ke view
    }

    public function add()
	{
    	$siswa = $this->siswa_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($siswa->rules()); //terapkan rules

    	if ($validation->run()) { //melakukan validasi
    		$siswa->save(); //simpan data ke database
    		$this->session->set_flashdata('success', 'Data Berhasil di Simpan'); //tampilkan pesan berhasil
    		redirect('admin/siswa');
    	}

    	$this->load->view("admin/siswa/new_form"); //tampilkan form add
    }

    public function edit($id = null) //berikan null agar mudak dicek
    {
    	if (!isset($id)) redirect('admin/siswa'); //redirect jika tidak ada $id

    	$siswa = $this->siswa_model; //objek model
    	$validation = $this->form_validation; //objek form validation
    	$validation->set_rules($siswa->rules()); //terapkan rules

    	if ($validation->run()){ //melakukan validasi
    		$siswa->update(); //menyimpan data
    		$this->session->set_flashdata('success', 'Data Berhasil di Update');
    		redirect('admin/siswa');
        }

        $data["siswa"] = $siswa->getById($id); //mengambil data untuk ditampilkan pada form
        if (!$data["siswa"]) show_404(); //jika tidak ada data, tampilan error 404

        $this->load->view("admin/siswa/edit_form", $data); //menampilkan form edit
    }

    public function delete($id=null)
    {
    	if(!isset($id)) show_404();

    	if($this->siswa_model->delete($id)) {
    	    $this->session->set_flashdata('success', 'Data Berhasil di Hapus');
    		redirect(site_url('admin/siswa'));
    	}
    }
}