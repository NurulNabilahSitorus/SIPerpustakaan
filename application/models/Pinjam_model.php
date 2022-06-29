<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam_model extends CI_Model 
{
	private $_table = "peminjaman_buku"; //nama tabel
// nama kolom di tabel, harus sama huruf besar dan huruf kecilnya!
    public $pinjam_id;
    public $nomor_induk_siswa;
    public $nama_siswa;
    public $kelas;
    public $no_buku;
    public $judul_buku;
    public $penerbit;
    public $tahun_terbit;
    public $jenis_buku;
    public $tanggal_peminjaman;

    public function rules() //Pada Rules, kita memberikan aturan untuk wajib mengisi (required)
    {
    	return [
    	['field' => 'nomor_induk_siswa',
    	'label' => 'Nomor Induk Siswa',
    	'rules' => 'numeric'],
    	
    	['field' => 'no_buku',
    	'label' => 'Nomor Buku',
    	'rules' => 'required'],

    	['field' => 'penerbit',
    	'label' => 'Penerbit',
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
    	return $this->db->get_where($this->_table, ["pinjam_id" => $id])->row();
    	//ini sama artinya seperti :
    	//select * from surat_masuk where masuk_id=$id
    }

    public function save()
    {
    	$post = $this->input->post(); 
    	$this->pinjam_id = $post["pinjam_id"];
    	$this->nomor_induk_siswa = $post["nomor_induk_siswa"];
    	$this->nama_siswa = $post["nama_siswa"];
    	$this->kelas = $post["kelas"];
    	$this->no_buku = $post["no_buku"];
    	$this->judul_buku = $post["judul_buku"];
    	$this->penerbit = $post["penerbit"];
    	$this->tahun_terbit = $post["tahun_terbit"];
        $this->jenis_buku = $post["jenis_buku"];
        $this->tanggal_peminjaman = $post["tanggal_peminjaman"];
    	return $this->db->insert($this->_table, $this); 
    }

    public function update()
    {
    	$post = $this->input->post(); 
    	$this->pinjam_id = $post["id"];
    	$this->nomor_induk_siswa = $post["nomor_induk_siswa"];
    	$this->nama_siswa = $post["nama_siswa"];
    	$this->kelas = $post["kelas"];
    	$this->no_buku = $post["no_buku"];
    	$this->judul_buku = $post["judul_buku"];
    	$this->penerbit = $post["penerbit"];
    	$this->tahun_terbit = $post["tahun_terbit"];
        $this->jenis_buku = $post["jenis_buku"];
        $this->tanggal_peminjaman = $post["tanggal_peminjaman"];
    	return $this->db->update($this->_table, $this ,array('pinjam_id' => $post['id'])); 
    }

    public function delete($id)
    {
    	return $this->db->delete($this->_table, array("pinjam_id" => $id));
    }
}