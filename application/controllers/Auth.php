<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login_user()
	{
		$this->form_validation->set_rules('username', 'Username', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));
		$this->form_validation->set_rules('password', 'Password', 'required', array(
			'required' => '%s Harus Diisi !!!'
		));

		if ($this->form_validation->run() == TRUE) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->user_login->login($username, $password);
		}
		$data = array(
			'title' => 'Login',
		);
		$this->load->view('backend/auth/v_login', $data, FALSE);
	}

	public function logout_user()
	{
		$this->user_login->logout();
	}

	public function forgot()
	{
		$data = array(
			'title' => 'Forgot Password',
		);
		$this->load->view('backend/auth/v_forgot', $data, FALSE);
	}
}
