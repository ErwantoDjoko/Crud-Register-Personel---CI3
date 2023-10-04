<?php

class Prefix_Model extends CI_Model
{
    var $table = 'a_prefix';

	public function getKelas()
	{
		$this->db->select('prefix_code,prefix_descriptions');
        $this->db->from($this->table);
        $this->db->where('h_prefix','CL');
        $query = $this->db->get();
        return $query->result();
	}
	public function getKlasifikasi()
	{
		$this->db->select('prefix_code,prefix_descriptions');
        $this->db->from($this->table);
        $this->db->where('h_prefix','KL');
        $query = $this->db->get();
        return $query->result();
	}
	public function getAlat()
	{
		$this->db->select('prefix_code,prefix_descriptions');
        $this->db->from($this->table);
        $this->db->where('h_prefix','JA');
        $query = $this->db->get();
        return $query->result();
	}
	public function getPersoneltype()
	{
		$this->db->select('prefix_code,prefix_descriptions');
        $this->db->from($this->table);
        $this->db->where('h_prefix','JP');
        $query = $this->db->get();
        return $query->result();
	}
	public function getDescription($param)
	{
		$this->db->select('prefix_descriptions');
        $this->db->from($this->table);
        $this->db->where('prefix_code',$param);
        $query = $this->db->get();
        return $query->row();
	}


	
}