<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Laporan Pengiriman TTP';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/index', $data);
		$this->load->view('templates/footer');
	}

	public function kembali()
	{
		$data['title'] = 'Laporan Pengembalian TTP';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/kembali', $data);
		$this->load->view('templates/footer');
	}

	public function stok()
	{
		$data['title'] = 'Laporan Pengadaan TTP';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/topbar');
		$this->load->view('templates/sidebar', $data);
		$this->load->view('report/stok', $data);
		$this->load->view('templates/footer');
	}
}
