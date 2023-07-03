<?php

function not_login()
{
    $ci = &get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login');
    }
}

function not_login_dosen()
{
    $ci = &get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('login/dosen');
    }
}

function sudah_login()
{
    $ci =& get_instance();
    if ($ci->session->userdata('username')) {
       if($ci->session->userdata('hk') == '1'){
        redirect('administrator');
       } elseif($ci->session->userdata('hk') == '2'){
        redirect('portal_dosen');
       }else{
        redirect('portal_mahasiswa/');
       }
    }
}

function cek_admin()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->users_id_dosen()->hak_akses != 1) {
        $ci->session->sess_destroy();
        redirect('login/dosen');
    }
}
function cek_mhs()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->users_id()->hak_akses != 3) {
        $ci->session->sess_destroy();
        redirect('login');
    }
}
function cek_dosen()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->users_id_dosen()->hak_akses != 2) {
        $ci->session->sess_destroy();
        redirect('login/dosen');
    }
}