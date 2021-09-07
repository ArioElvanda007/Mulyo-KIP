<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kepegawaian extends CI_Controller
{
	public function profile($Username = null)
    {
        // $data['Karyawan'] = $this->M_kepegawaian->DataKaryawan($Username);
		$data['judul'] = 'PROFILE';

        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('content/profile');
        $this->load->view('templates/footer');
    }
}