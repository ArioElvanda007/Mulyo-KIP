<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Users');
	}

	function index()
	{
		// $this->load->view('auth');
		if ($this->input->post()) {
			$user = $this->Users->getUserByUsername($this->input->post('username'));
			if ($user) {
				if (password_verify($this->input->post('password'), $user->PasswordCI)) {
					$this->session->set_userdata([
						'MIS_LOGGED_ID'   => $user->UserID,
						'MIS_LOGGED_CORP'   => $this->input->post('corp'),
						'MIS_LOGGED_NAME'   => $user->UserName,
						'MIS_LOGGED_TOKEN'  => json_encode($user),
						'MIS_LOGGED_NIK'    => $user->NIK,
					]);
					// $this->setMessage('Welcome','success','Login berhasil, selamat datang '. $user->UserName);
					redirect('Welcome/index');
				} else {
					$this->session->set_flashdata('login_error', 'Username dan password tidak sesuai');
					redirect('Auth');
				}
			} else {
				$this->session->set_flashdata('login_error', 'Username tidak terdaftar');
				redirect('Auth');
			}
		} else {
			$this->load->view('auth');
		}
	}

	public function updatePassword()
	{
		if ($this->input->post()) {
			$token = json_decode($this->session->userdata('MIS_LOGGED_TOKEN'));
			$this->Users->updateUser([
				'PasswordCI' => crypt($this->input->post('Password'), '')
			], $token->UserID);
			$this->session->set_flashdata('Berhasil', 'success', 'Password anda berhasil diubah!');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}



	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}
