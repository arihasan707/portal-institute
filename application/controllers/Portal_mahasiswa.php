<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portal_mahasiswa extends CI_Controller
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
		cek_mhs();
		
	}

	public function index()
	{
		$p = $this->fungsi->users_id()->id;
		$data1['users'] = $this->app->get_profil('tbl_profil_mhs' ,['id_users'=>$p])->row();
		
		$data['title'] = 'Portal Mahasiswa';
		$this->load->view('template_mhs/v_head', $data);
		$this->load->view('template_mhs/v_header' ,$data1);
		$this->load->view('template_mhs/v_sidebar');
		$this->load->view('mhs/v_dashboard');
		$this->load->view('template_mhs/v_footer');
	}

	public function khs()
	{
		$p = $this->fungsi->users_id()->id;
		$data1['users'] = $this->app->get_profil('tbl_profil_mhs' ,['id_users'=>$p])->row();
		
		$title['title'] = 'Portal Mahasiswa';
		$data['semester'] = $this->app->get_smstr('tbl_semester');
		$this->load->view('template_mhs/v_head', $title);
		$this->load->view('template_mhs/v_header',$data1);
		$this->load->view('template_mhs/v_sidebar');
		$this->load->view('mhs/v_khs', $data);
		$this->load->view('template_mhs/v_footer');
	}
	public function cari()
	{
		$p = $this->fungsi->users_id()->id;
		$data1['users'] = $this->app->get_profil('tbl_profil_mhs' ,['id_users'=>$p])->row();
		
		$mhs = $this->fungsi->users_id()->id;
		$id = $this->input->post('semester');
		$title['title'] = 'Portal Mahasiswa';
		$data['semester'] = $this->app->get_all('tbl_semester');
		$data['khs'] = $this->app->get_khs('tbl_khs', ['id_users' => $mhs], ['id_semester' => $id])->row();
		$this->load->view('template_mhs/v_head', $title);
		$this->load->view('template_mhs/v_header',$data1);
		$this->load->view('template_mhs/v_sidebar');
		$this->load->view('mhs/v_cari', $data);
		$this->load->view('template_mhs/v_footer');
	}

	public function pdf($id,$id_smstr)
	{
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'A4',
			'orientation' => 'P'
		]);
		$datakhs['pdf']= $this->app->get_pdf('tbl_khs',['id_users'=>$id],['id_semester'=>$id_smstr])->row();
		$data = $this->load->view('mhs/v_pdf',$datakhs,TRUE);
		$mpdf->WriteHTML($data);
		$datakhs = $this->app->get_pdf('tbl_khs',['id_users'=>$id],['id_semester'=>$id_smstr])->row();
		$file_name = 'KHS-' . str_replace(' ','-',$datakhs->nama) . '-' . date('dmY') . '.pdf';
		$mpdf->Output($file_name,'D');
	}
	
	public function profil(){
		$p = $this->fungsi->users_id()->id;
		$data1['users'] = $this->app->get_profil('tbl_profil_mhs' ,['id_users'=>$p])->row();
		
		$p = $this->fungsi->users_id()->id;
		$data['mhs'] = $this->app->get_profil('tbl_profil_mhs' ,['id_users'=>$p])->row();
		$title['title'] = 'Portal Mahasiswa';
		$this->load->view('template_mhs/v_head', $title);
		$this->load->view('template_mhs/v_header', $data1);
		$this->load->view('template_mhs/v_sidebar');
		$this->load->view('mhs/v_profil',$data);
		$this->load->view('template_mhs/v_footer');
	}
	
	public function edit_profil($id)
	{
		$foto_lama = trim($this->input->post('foto_lama'));
		
		$config['upload_path'] = './assets/front/upload/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if (!empty($_FILES['foto']['name']))
			if ($this->upload->do_upload('foto')) {
				$gbr = $this->upload->data();
				//Compress Image
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/front/upload/' . $gbr['file_name'];
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['quality'] = '60%';
				$config['width'] = 300;
				$config['height'] = 300;
				$config['new_image'] = './assets/front/upload/' . $gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				$data1 = [
					'foto' => $gbr['file_name'],
					'tmp_lahir' => $this->input->post('tmp_lahir'),
					'tgl_lahir' => $this->input->post('tgl_lahir'),
					'jkl' => $this->input->post('jkl'),
					'alamat' => $this->input->post('alamat'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('hp')
				];
				$data = [
				'nama'=> $this->input->post('nama')	
				];
				$path = './assets/front/upload/' . $foto_lama;
				unlink($path);
				$this->app->update('tbl_profil_mhs', $data1, ['id_users' => $id]);
				$this->app->update('tbl_mhs', $data, ['id' => $id]);
				$this->session->set_flashdata('sukses', 'Profil telah di perbaharui');
				redirect('portal_mahasiswa/profil');
			} else {
				$this->session->set_flashdata('alert', 'Silahkan pilih format foto yang sesuai');
				redirect('portal_mahasiswa/profil');
			}
		else {
			//  simpan tanpa foto
			$data1 = [
				'foto' => $foto_lama,
				'tmp_lahir' => $this->input->post('tmp_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jkl' => $this->input->post('jkl'),
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),
				'no_hp' => $this->input->post('hp')
			];
			$data = [
				'nama'=> $this->input->post('nama')	
				];
			$this->app->update('tbl_profil_mhs', $data1, ['id_users' => $id]);
			$this->app->update('tbl_mhs', $data, ['id' => $id]);
			$this->session->set_flashdata('sukses', 'Profil telah di perbaharui');
			redirect('portal_mahasiswa/profil');
		}
	}
	
	public function edit_pass($id){
		$pass_lama = $this->input->post('pass_lama');
		$pass_baru = $this->input->post('pass_baru');
		
		$cek = $this->app->get_where('tbl_mhs',['id'=> $id])->row_array();
		if (password_verify($pass_lama , $cek['pass'])){
			$data = [
			'pass' => password_hash($pass_baru, PASSWORD_DEFAULT)	
			];
			$this->app->update('tbl_mhs', $data , ['id'=>$id]);
			$this->session->set_flashdata('sukses_pass' ,'sukses_edit');
			redirect('portal_mahasiswa/profil');
		}else{
			$this->session->set_flashdata('gagal_pass', 'gagal_edit');
			redirect('portal_mahasiswa/profil');
		}
		
	}
	
	public function keluar()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
	

}