<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('dashboardmod');

		// $username=$this->session->userdata('username');
		// if(!$this->session->userdata('username'))
		// {
		// 	redirect('?SILAHKAN LOGIN DAHULU');
		// }
	}

	
	public function index()
{
        $tanggal=date('d');
        $bulan = date('m');
        $tahun = date('Y');
        $date = $bulan."/".$tanggal."/".$tahun;
              
		$data['AbsensiPusat']=$this->db->query("SELECT * FROM AbsenHarian where TglEntry = '$date' ORDER BY Divisi ASC")->result();



		// $data['AbsensiPusat']=$this->dashboardmod->get_data('AbsenHarian')->result();

				$this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view("dashboard",$data);
        $this->load->view('templates/footer');
	}
}
