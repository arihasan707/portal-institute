<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{

    // function get($username)
    // {
    //     $this->db->from('tbl_mhs');
    //     $this->db->where('username', $username);
    //     return $this->db->get();
    // }
    function get_id($id)
    {
        $this->db->from('tbl_mhs');
        $this->db->where('id', $id);
        return $this->db->get();
    }
}