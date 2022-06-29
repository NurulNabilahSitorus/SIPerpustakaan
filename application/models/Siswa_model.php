<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model 
{
	private $_table = "siswa"; //nama tabel
// nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $siswa_id;
    public $nomor_induk_siswa;
    public $nama_siswa;
    public $jenis_kelamin;
    public $kelas;

    public function rules() //Pada Rules, kita memberikan aturan untuk wajib mengisi (required)
    {
    	return [
    	['field' => 'nomor_induk_siswa',
    	'label' => 'Nomor Induk Siswa',
    	'rules' => 'numeric'],
    	
    	['field' => 'nama_siswa',
    	'label' => 'Nama Siswa',
    	'rules' => 'required'],

    	['field' => 'kelas',
    	'label' => 'Kelas',
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
    	return $this->db->get_where($this->_table, ["siswa_id" => $id])->row();
    	//ini sama artinya seperti :
    	//select * from surat_masuk where masuk_id=$id
    }

    public function save()
    {
    	$post = $this->input->post(); 
    	$this->siswa_id = $post["siswa_id"];
    	$this->nomor_induk_siswa = $post["nomor_induk_siswa"];
    	$this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
    	$this->kelas = $post["kelas"];
        return $this->db->insert($this->_table, $this); 
    }

    public function update()
    {
    	$post = $this->input->post(); 
    	$this->siswa_id = $post["id"];
    	$this->nomor_induk_siswa = $post["nomor_induk_siswa"];
    	$this->nama_siswa = $post["nama_siswa"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
    	$this->kelas = $post["kelas"];
    	return $this->db->update($this->_table, $this ,array('siswa_id' => $post['id'])); 
    }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("siswa_id" => $id));
    }
}