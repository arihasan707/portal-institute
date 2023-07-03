<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('app');
        sudah_login();
    }

    public function Index()
    {
        $this->load->view('mhs/v_login');
    }
    public function dosen()
    {
        $this->load->view('dosen/v_login');
    }

    public function logproses()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('pass');

        $login = $this->db->get_where('tbl_mhs', ['username' => $user])->row_array();
        if ($login) {
            if (password_verify($pass, $login['pass'])) {
                $data = [
                    'id' => $login['id'],
                    'username' => $login['username'],
                    'nama' => $login['nama'],
                    'hk' => $login['hak_akses']
                ];
                $this->session->set_userdata($data);
                 redirect('portal_mahasiswa');
            } else {
                $this->session->set_flashdata('alert', '<strong>Afwan</strong> username atau password salah');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('warn', '<strong>Afwan</strong> username tidak terdaftar');
            redirect('login');
        }
    }
    
    public function logproses1()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('pass');

        $login = $this->db->get_where('tbl_login', ['username' => $user])->row_array();
        if ($login) {
            if (password_verify($pass, $login['pass'])) {
                $data = [
                    'id' => $login['id'],
                    'username' => $login['username'],
                    'nama' => $login['nama'],
                    'hk' => $login['hak_akses']
                ];
                $this->session->set_userdata($data);
                if($this->session->userdata('hk') == '1'){
                    redirect('administrator');
                }else{
                    redirect('portal_dosen');
                }
            } else {
                $this->session->set_flashdata('alert', '<strong>Afwan</strong> username atau password salah');
                redirect('login/dosen');
            }
        } else {
            $this->session->set_flashdata('warn', '<strong>Afwan</strong> username tidak terdaftar');
            redirect('login/dosen');
        }
    }
}