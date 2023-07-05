<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal_dosen extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        not_login_dosen();
        cek_dosen();
    }

    public function index()
    {
        $data['title'] = 'Portal Dosen';
        $this->load->view('template_dosen/v_head', $data);
        $this->load->view('template_dosen/v_header');
        $this->load->view('template_dosen/v_sidebar');
        $this->load->view('dosen/v_dashboard');
        $this->load->view('template_dosen/v_footer');
    }

    public function daftar_mahasiswa()
    {
        $title['title'] = 'Portal Dosen';
        $title1['title1'] = 'Daftar Mahasiswa';
        $this->load->view('template_dosen/v_head', $title);
        $this->load->view('template_dosen/v_header');
        $this->load->view('template_dosen/v_sidebar');
        $this->load->view('dosen/v_daftar_mhs', $title1);
        $this->load->view('template_dosen/v_footer');
    }

    public function input_nilai()
    {
        $title['title'] = 'Portal Dosen';
        $data['title1'] = 'Input Nilai';
        $data['semester'] = $this->app->get_all('tbl_semester');
        $data['mhs'] = $this->app->get_tahun_angkatan('tbl_mhs');
        $this->load->view('template_dosen/v_head', $title);
        $this->load->view('template_dosen/v_header');
        $this->load->view('template_dosen/v_sidebar');
        $this->load->view('dosen/v_input_nilai', $data);
        $this->load->view('template_dosen/v_footer');
    }

    public function tambah_nilai()
    {
        $id = $this->input->post('id');
        $semester = $this->input->post('semester');
        $khs = $this->input->post('khs');
        $data = [
            'id_users' => $id,
            'id_semester' => $semester,
            'khs' => $khs
        ];
        $this->app->insert('tbl_khs', $data);
        $data = $this->app->get_nim('tbl_khs',['id_users'=> $id])->row();
        $this->session->set_flashdata('sukses_', 'nilai KHS telah di publish ke mahasiswa dengan nim <strong> ' . $data->username . '</strong>');
        redirect('portal_dosen/input_nilai');
    }
    
    public function input($id)
    {    
        $title['title'] = 'Portal Dosen';
        $data['title1'] = 'Input Nilai';
        $data['semester'] = $this->app->get_smstr('tbl_semester');
        $data['k'] = $this->app->get_mhs_id('tbl_mhs', ['hak_akses' => 3] , ['id'=> $id])->row();
        $this->load->view('template_dosen/v_head', $title);
        $this->load->view('template_dosen/v_header');
        $this->load->view('template_dosen/v_sidebar');
        $this->load->view('dosen/v_input', $data);
        $this->load->view('template_dosen/v_footer');
    }
    
    public function hapus_nilai_mhs($id)
    {
        $this->app->delete_khs('tbl_khs',['id_users' => $id]);
        $data = $this->app->get_where('tbl_mhs',['id'=> $id])->row();
        $this->session->set_flashdata('sukses_', 'nilai KHS dengan nim <strong> ' . $data->username . '</strong> telah di hapus');
        redirect('portal_dosen/input_nilai');
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('login/dosen');
    }
}