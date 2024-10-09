<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Product_model extends CI_Model
{
	public function getAll()
	{
		$sql = "SELECT * FROM products";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	public function getAllv2()
	{
		$result = $this->db->get('products')->result();
		return $result;
	}

	public function getByCode($cd)
	{
		$sql = "SELECT * FROM products WHERE code='$cd'";
		$result = $this->db->query($sql)->result();
		return $result;
	}

	public function getByCodev2($cd)
	{
		$this->db->where('code', $cd);
		$result = $this->db->get('products')->result();
		return $result;
	}

	public function removeByCode($cd)
	{
		$sql = "DELETE FROM products WHERE code='$cd'";
		$this->db->query($sql);
	}

	public function insertProduct($data)
	{
		$this->db->insert('products', $data);
	}

	public function deleteProduct($code)
	{
		$this->db->where('code', $code);
		$this->db->delete('products');
	}
}
