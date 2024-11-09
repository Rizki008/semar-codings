<?php



defined('BASEPATH') or exit('No direct script access allowed');

class M_client extends CI_Model
{

	// List all your items
	public function client()
	{
		$this->db->select('*');
		$this->db->from('client');
		return $this->db->get()->result();
	}

	// Add a new item
	public function add($data)
	{
		$this->db->insert('client', $data);
	}

	//Update one item
	public function update($data)
	{
		$this->db->where('id_client', $data['id_client']);
		$this->db->update('client', $data);
	}

	//Delete one item
	public function delete($data)
	{
		$this->db->where('id_client', $data['id_client']);
		$this->db->delete('client', $data);
	}
}

/* End of file M_client.php */
