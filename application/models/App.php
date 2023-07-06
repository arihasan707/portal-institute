<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Model
{

    function get_where($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get();
    }
    
    function get_where1($table, $where,$where1)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where($where1);
        return $this->db->get();
    }
    
    function get_all($table)
    {
        $this->db->from($table);
        return $this->db->get();
    }
    function get_angktn($table)
    {
        $this->db->from($table);
        $this->db->order_by('angkatan','desc');
        return $this->db->get();
    }    
 
    
    function get_smstr($table)
    {
        $this->db->from($table);
        $this->db->order_by('semester', 'desc');
        return $this->db->get();
    }
    
    function get_tahun_angkatan($table)
    {
        $this->db->from($table);
        $this->db->join('tbl_angkatan','tbl_mhs.id_angkatan=tbl_angkatan.id_angktn');
        $this->db->order_by('created_at', 'desc');
        return $this->db->get();
    }

    function all_akses_mhs()
    {
        $this->db->from('tbl_login');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }
    function all_akses_dosen()
    {
        $this->db->from('tbl_d_login');
        $this->db->order_by('id', 'DESC');
        return $this->db->get();
    }

    function insert($table, $data)
    {
        $this->db->insert($table, $data);
    }
    
    function get_khs($table, $where , $where1)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where($where1);
        $this->db->join('tbl_semester', 'tbl_semester.id=tbl_khs.id_semester');
        // $this->db->join('tbl_login','tbl_login.id=tbl_khs.id_users');
        return $this->db->get();
    }
    function get_cek_input($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join('tbl_semester', 'tbl_semester.id=tbl_khs.id_semester');
        // $this->db->join('tbl_login','tbl_login.id=tbl_khs.id_users');
        return $this->db->get();
    }
    function get_pdf($table, $where ,$where1)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where($where1);
        $this->db->join('tbl_semester', 'tbl_semester.id=tbl_khs.id_semester');
        $this->db->join('tbl_mhs','tbl_mhs.id=tbl_khs.id_users');
        return $this->db->get();
    }

    function get_nim($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->join('tbl_mhs','tbl_mhs.id=tbl_khs.id_users');
        return $this->db->get();
    }
    function get_mhs_id($table, $where, $where1)
    {
        $this->db->from($table);
        $this->db->where($where);
        $this->db->where($where1);
        $this->db->order_by('id', 'DESC');
        // $this->db->join('tbl_khs','tbl_khs.id_users=tbl_login.id');
        return $this->db->get();
    }
    function get_profil($table, $where)
    {
        $this->db->from($table);
        $this->db->where($where);
        // $this->db->where($where1);
        $this->db->order_by('id', 'DESC');
        $this->db->join('tbl_mhs','tbl_mhs.id=tbl_profil_mhs.id_users');
        return $this->db->get();
    }
    
    function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    
    function delete_khs($table, $where)
    {
        $this->db->where($where);
        $this->db->join('tbl_mhs','tbl_mhs.id=tbl_khs.id_users');
        $this->db->delete($table);
    }
    
    function update($table = null, $data = null, $where = null)
    {
        $this->db->update($table, $data, $where);
    }
  
  
}