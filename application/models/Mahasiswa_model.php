<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public function getMahasiswa($id = NULL)
    {
        if ($id == NULL) {
            return $this->db->get('tb_mahasiswa')->result_array();
        } else {
            $this->db->where('nim', $id);
            return $this->db->get('tb_mahasiswa')->result_array();
        }
    }

    
}