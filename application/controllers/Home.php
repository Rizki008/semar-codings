<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'isi' => 'backend/v_dashboard'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}
}
