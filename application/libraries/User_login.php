<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->m_auth->login_user($username, $password);
		if ($cek) {
			$id_user = $cek->id_user;
			$fullname = $cek->fullname;
			$username = $cek->username;
			$level = $cek->level;

			//session
			$this->ci->session->set_userdata('id_user', $id_user);
			$this->ci->session->set_userdata('username', $username);
			$this->ci->session->set_userdata('fullname', $fullname);
			$this->ci->session->set_userdata('level', $level);

			redirect('home');
		} else {
			$this->ci->session->set_flashdata('error', 'Username Atau Password Salah');
			redirect('auth/login_user');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('username') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login');
			redirect('auth/login_user');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('username');
		$this->ci->session->unset_userdata('fullname');
		$this->ci->session->unset_userdata('level');
		$this->ci->session->set_flashdata('pesan', 'Berhasil LogOut!!!!');
		redirect('auth/login_user');
	}
}
