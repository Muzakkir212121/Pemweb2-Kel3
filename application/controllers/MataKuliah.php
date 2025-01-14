<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MataKuliah extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['url'] = '../assets/unsia.png';
		$this->load->view('resource2', $data);
		$this->load->view('nav');
		$this->load->view('dash_mata_kuliah');
	}

	public function create_matakuliah() {
    // Tampilkan halaman form tambah data mata kuliah
}

public function store_matakuliah() {
    // Proses tambah data mata kuliah ke database
}

public function edit_matakuliah($id) {
    // Tampilkan halaman form edit data mata kuliah berdasarkan ID
}

public function update_matakuliah($id) {
    // Proses update data mata kuliah ke database berdasarkan ID
}

public function delete_matakuliah($id) {
    // Proses hapus data mata kuliah dari database berdasarkan ID
}

}
