<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurusan_model extends CI_Model
{
public function getJurusan()
    {
            return $this->db->get('tb_jurusan')->result_array();
        
    }
}