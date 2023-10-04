<?php

class Personel_Model extends CI_Model
{
	var $table = 'a_personel';
	function saverecords($data)
    {
        $result = $this->db->insert($this->table, $data);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    function getPerson($param){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('acak', $param);
        $query = $this->db->get();
        return $query->row();
    }
	
}