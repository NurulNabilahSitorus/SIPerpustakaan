<?php defined('BASEPATH') OR exit('No direct script access allowed');

class buku_model extends CI_Model 
{
	private $_table = "buku"; //nama tabel
// nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
	public $buku_id;
	public $no_buku;
    public $judul_buku;
    public $pengarang;
    public $penerbit;
    public $tahun_terbit;
    public $jenis_buku;
    public $jumlah_buku;
    public $status_buku;

    public function rules() //Pada Rules, kita memberikan aturan untuk wajib mengisi (required)
    {
    	return [
		['field' => 'no_buku',
		'label' => 'Nomor Buku',
		'rules' => 'numeric'],	

    	['field' => 'judul_buku',
    	'label' => 'Judul Buku',
    	'rules' => 'required'],
    	
    	['field' => 'penerbit',
    	'label' => 'Penerbit',
    	'rules' => 'required'],

		['field' => 'jenis_buku',
    	'label' => 'Jenis Buku',
    	'rules' => 'required'],
    ];
 }
//method get() dan getAll(). Kedua method ini akan kita gunakan untu mengambil data dari database
    public function getAll()
    {
    	return $this->db->get($this->_table)->result();
    	//ini sama artinya seperti :
    	//SELECT * FROM surat_masuk
    }

    public function getById($id) 
    {
    	return $this->db->get_where($this->_table, ["buku_id" => $id])->row();
    	//ini sama artinya seperti :
    	//select * from surat_masuk where masuk_id=$id
    }

    public function save()
    {
    	$post = $this->input->post(); 
    	$this->buku_id = $post["buku_id"];
		$this->no_buku = $post["no_buku"];
    	$this->judul_buku = $post["judul_buku"];
    	$this->pengarang = $post["pengarang"];
    	$this->penerbit = $post["penerbit"];
    	$this->tahun_terbit = $post["tahun_terbit"];
    	$this->jenis_buku = $post["jenis_buku"];
    	$this->jumlah_buku = $post["jumlah_buku"];
    	$this->status_buku = $post["status_buku"];
    	return $this->db->insert($this->_table, $this); 
    }

    public function update()
    {
    	$post = $this->input->post(); 
    	$this->buku_id = $post["id"];
		$this->no_buku = $post["no_buku"];
    	$this->judul_buku = $post["judul_buku"];
    	$this->pengarang = $post["pengarang"];
    	$this->penerbit = $post["penerbit"];
    	$this->tahun_terbit = $post["tahun_terbit"];
    	$this->jenis_buku = $post["jenis_buku"];
    	$this->jumlah_buku = $post["jumlah_buku"];
    	$this->status_buku = $post["status_buku"];
    	return $this->db->update($this->_table, $this ,array('buku_id' => $post['id'])); 
    }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("buku_id" => $id));
    }
}