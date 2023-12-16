<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['produk'] = $this->db->where("status_id",1)->join('kategori','id_kategori = kategori_id')->get("produk")->result();
		$data['kategori'] = $this->db->get("kategori")->result();
		$data['status'] = $this->db->get("status")->result();
		$this->load->view('part/head');
		$this->load->view('part/topbar');
		$this->load->view('produk/index',$data);
		$this->load->view('part/foot');
	}

	public function tambah(){
		$nama_produk = $this->input->post('nama_produk');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$status = $this->input->post('status');

		$data = array(
			'nama_produk'=>$nama_produk,
			'kategori_id'=>$kategori,
			'harga'=>$harga,
			'status_id'=>$status,
		);

		$tambah = $this->db->insert('produk',$data);
		if(!$tambah){
			$this->session->set_flashdata('gagal','data produk gagal di tambahkan!');
		}else{
			$this->session->set_flashdata('berhasil','data produk berhasil di tambahkan!');
		}
		redirect("produk");
	}

	public function edit(){
		$id_produk = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga = $this->input->post('harga');
		$kategori = $this->input->post('kategori');
		$status = $this->input->post('status');

		$data = array(
			'nama_produk'=>$nama_produk,
			'kategori_id'=>$kategori,
			'harga'=>$harga,
			'status_id'=>$status,
		);

		$edit = $this->db->where('id_produk',$id_produk)->update('produk',$data);

		if(!$edit){
			$this->session->set_flashdata('gagal','data produk gagal di edit!');
		}else{
			$this->session->set_flashdata('berhasil','data produk berhasil di edit!');
		}
		redirect("produk");
	}

	public function hapus(){
		$id_produk = $this->input->post('id_produk');

		$hapus = $this->db->where("id_produk",$id_produk)->delete('produk');

		if(!$hapus){
			$this->session->set_flashdata('gagal','data produk gagal di hapus!');
		}else{
			$this->session->set_flashdata('berhasil','data produk berhasil di hapus!');
		}
		redirect("produk");
	}
}
