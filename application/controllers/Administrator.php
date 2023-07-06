<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
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
        not_login();
        cek_admin();
    }

    public function index()
    {
        $data['title'] = 'Administrator';
        $this->load->view('template_admin/v_head', $data);
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/v_dashboard');
        $this->load->view('template_admin/v_footer');
    }

    public function akses_mhs()
    {
        $title['title'] = 'Administrator';
        $data = [
            'title' => 'Akses Login Mahasiswa',
            'login' => $this->app->get_tahun_angkatan('tbl_mhs'),
            'angkatan' => $this->app->get_angktn('tbl_angkatan')->result()
        ];
        $this->load->view('template_admin/v_head', $title);
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/v_akses_mhs', $data);
        $this->load->view('template_admin/v_footer');
    }

    public function tambah_akses_mhs()
    {
        $data = [
            'username' => $this->input->post('username'),
            'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
            'nama' => $this->input->post('nama'),
            'id_angkatan' => $this->input->post('angkatan'),
            'hak_akses' => '3'
        ];
        $data1 = [
            'foto' => '-',
            'tmp_lahir' => '-',
            'tgl_lahir' => '-',
            'jkl' => '-',
            'alamat'=> '-',
            'email'=>'-',
            'no_hp'=>'-'
        ];
        $this->app->insert('tbl_mhs', $data);
        $this->app->insert('tbl_profil_mhs', $data1);
        $this->session->set_flashdata('sukses_tambah', 'akses login telah di tambah ');
        redirect('administrator/akses_mhs');
    }

    public function akses_dosen()
    {
        $title['title'] = 'Administrator';
        $data = [
            'title' => 'Akses Login Dosen',
            'login' => $this->app->get_where('tbl_login', ['hak_akses' => 2])
        ];
        $this->load->view('template_admin/v_head', $title);
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/v_akses_dosen', $data);
        $this->load->view('template_admin/v_footer');
    }
    public function tambah_akses_dosen()
    {
        $data = [
            'username' => $this->input->post('username'),
            'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
            'nama' => $this->input->post('nama'),
            'hak_akses' => '2'
        ];
        $this->app->insert('tbl_login', $data);
        $this->session->set_flashdata('sukses_tambah', 'akses login telah di tambah ');
        redirect('administrator/akses_dosen');
    }

    public function akses_admin()
    {
        $title['title'] = 'Administrator';
        $data = [
            'title' => 'Akses Login Admin',
            'login' => $this->app->get_where('tbl_login', ['hak_akses' => 1])
        ];
        $this->load->view('template_admin/v_head', $title);
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/v_akses_admin', $data);
        $this->load->view('template_admin/v_footer');
    }
    public function tambah_akses_admin()
    {
        $data = [
            'username' => $this->input->post('username'),
            'pass' => password_hash($this->input->post('pass'), PASSWORD_DEFAULT),
            'nama' => $this->input->post('nama'),
            'hak_akses' => "1"
        ];
        $this->app->insert('tbl_login', $data);
        $this->session->set_flashdata('sukses_tambah', 'akses login telah di tambah ');
        redirect('administrator/akses_admin');
    }
    
    public function hapus_mhs($id)
	{
        $foto = $this->app->get_where('tbl_profil_mhs', ['id_users'=> $id])->row_array();
        $path = './assets/front/upload/'. $foto['foto'];
        unlink($path);
        $this->app->delete('tbl_profil_mhs',['id_users'=>$id]);
		$this->app->delete('tbl_mhs',['id'=>$id]);
		$this->app->delete('tbl_khs',['id_users'=>$id]);
		$this->session->set_flashdata('sukses_hapus', 'akses login telah di hapus ');
		redirect('administrator/akses_mhs');
	}
    public function hapus_dosen($id)
	{
		$this->app->delete('tbl_login',['id'=>$id]);
		$this->session->set_flashdata('sukses_hapus', 'akses login telah di hapus ');
		redirect('administrator/akses_dosen');
	}
    public function hapus_admin($id)
	{
		$this->app->delete('tbl_login',['id'=>$id]);
		$this->session->set_flashdata('sukses_hapus', 'akses login telah di hapus ');
		redirect('administrator/akses_admin');
	}
    
    public function tahun_semester(){
        $data['title'] = 'Tahun Semester';
        $data['smstr'] = $this->app->get_all('tbl_semester');
        $this->load->view('template_admin/v_head', $data);
        $this->load->view('template_admin/v_header');
        $this->load->view('template_admin/v_sidebar');
        $this->load->view('admin/v_tahun_semester',$data);
        $this->load->view('template_admin/v_footer');
    }
    
    public function tambah_smstr(){
        $smstr = $this->input->post('smstr');
        
        $data = [
          'semester' => $smstr  
        ];
        $this->app->insert('tbl_semester',$data);
        $this->session->set_flashdata('sukses_tambah', 'tahun semester telah di tambah');
        redirect('administrator/tahun_semester');
    }
    
    public function hapus_smstr($id){
        $this->app->delete('tbl_semester',['id'=>$id]);
		$this->session->set_flashdata('sukses_hapus', 'tahun semester telah di hapus');
		redirect('administrator/tahun_semester');
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect('login/dosen');
    }
}