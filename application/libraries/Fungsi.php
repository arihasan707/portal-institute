<?php

class Fungsi
{
    protected $ci;

    function __construct()
    {
        $this->ci = get_instance();
    }

    // public function users()
    // {
    //     $this->ci->load->model('users');
    //     $user_id = $this->ci->session->userdata('username');
    //     $user_data = $this->ci->users->get($user_id)->row();
    //     return $user_data;
    // }
    public function users_id()
    {
        $this->ci->load->model('users');
        $user_id = $this->ci->session->userdata('id');
        $user_data = $this->ci->users->get_id($user_id)->row();
        return $user_data;
    }
    public function users_id_dosen()
    {
        $this->ci->load->model('users_dosen');
        $user_id = $this->ci->session->userdata('id');
        $user_data = $this->ci->users_dosen->get_id($user_id)->row();
        return $user_data;
    }
}