<?php



defined('BASEPATH') or exit('No direct script access allowed');

class Client extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies
		$this->load->model('M_client', 'client');
	}

	// List all your items
	public function index()
	{

		$data = array(
			'title' => 'Data Client',
			'client' => $this->client->client(),
			'isi' => 'backend/client/v_client'
		);
		$this->load->view('backend/v_wrapper', $data, FALSE);
	}

	// Add a new item
	public function add()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'angkatan' => $this->input->post('angkatan'),
			'no_hp' => $this->input->post('no_hp'),
			'judul' => $this->input->post('judul'),
		);
		$this->client->add($data);

		redirect('client', 'refresh');
	}

	//Update one item
	public function update($id_client)
	{
		$data = array(
			'id_client' => $id_client,
			'nama' => $this->input->post('nama'),
			'kelas' => $this->input->post('kelas'),
			'angkatan' => $this->input->post('angkatan'),
			'no_hp' => $this->input->post('no_hp'),
			'judul' => $this->input->post('judul'),
		);
		$this->client->update($data);

		redirect('client', 'refresh');
	}

	//Delete one item
	public function delete($id_client)
	{
		$data = array(
			'id_client' => $id_client,
		);
		$this->client->delete($data);

		redirect('client', 'refresh');
	}
}

/* End of file Client.php */
