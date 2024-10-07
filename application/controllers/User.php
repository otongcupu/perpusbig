<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Peminjaman Buku';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function kembali()
	{
		$data['title'] = 'Pengembalian Buku';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/kembali', $data);
		$this->load->view('templates/footer');
	}

	public function stok()
	{
		$data['title'] = 'Pengadaan Buku';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('user/stok', $data);
		$this->load->view('templates/footer');
	}
}
