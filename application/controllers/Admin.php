<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->has_userdata('u_name') || $this->session->u_level !== '1') redirect(base_url());
	}
	public function index() {
		$jum_data = array(
			'jum_kar' => $this->m_kar->jum_data('tb_karyawan'),
			'jum_jab' => $this->m_kar->jum_data('tb_jabatan'),
			'jum_div' => $this->m_kar->jum_data('tb_divisi'),
			'jum_proy' => $this->m_kar->jum_data('tb_proyek')
		);
		$this->load->view('template/admin/header');
		$this->load->view('admin/index', $jum_data);
		$this->load->view('template/admin/footer');
	}
	public function karyawan() {
		$karyawan = $this->m_kar->get_all_karyawan();
		$divisi = $this->m_divjab->get_all_divisi();
		$jabatan = $this->m_divjab->get_all_jabatan();
		$data = array('karyawan' => $karyawan, 'divisi' => $divisi, 'jabatan' => $jabatan);
		$this->config->set_item('page_title', 'Karyawan - Admin');
		$this->load->view('template/admin/header');
		$this->load->view('admin/a_karyawan', $data);
		$this->load->view('template/admin/footer');
	}
	public function divisi() {
		$divisi = $this->m_divjab->get_all_divisi();
		$this->config->set_item('page_title', 'Divisi - Admin');
		$this->load->view('template/admin/header');
		$this->load->view('admin/a_divisi', ['divisi' => $divisi]);
		$this->load->view('template/admin/footer');
	}
	public function jabatan() {
		$jabatan = $this->m_divjab->get_all_jabatan();
		$this->config->set_item('page_title', 'Jabatan - Admin');
		$this->load->view('template/admin/header');
		$this->load->view('admin/a_jabatan', ['jabatan' => $jabatan]);
		$this->load->view('template/admin/footer');
	}
	public function proyek() {
		$karyawan = $this->m_kar->get_all_karyawan();
		$proyek = $this->m_produk->get_all_proyek();
		$this->config->set_item('page_title', 'Proyek - Admin');
		$this->load->view('template/admin/header');
		$this->load->view('admin/a_proyek', ['proyek' => $proyek, 'karyawan' => $karyawan]);
		$this->load->view('template/admin/footer');
	}
	public function users() {
		$user = $this->m_user->get_all_user();
		$this->config->set_item('page_title', 'User - Admin');
		$this->load->view('template/admin/header');
		$this->load->view('admin/a_user', ['users' => $user]);
		$this->load->view('template/admin/footer');
	}
	public function profil_company() {
		$company = $this->m_profil->get_profil();
		$this->config->set_item('page_title', 'Profil Perusahaan - Admin');
		$this->load->view('template/admin/header');
		$this->load->view('admin/a_profil_perusahaan', ['company' => $company]);
		$this->load->view('template/admin/footer');
	}

	/*---------------------------------
	** FUNCTION UNTUK EDIT DATA
	**----------------------------------*/
	public function do_edit_user() { // EDIT DATA PENGGUNA
		$edit = array(
			'id' => $this->input->post('id'),
			'username' => $this->input->post('username'),
			'level' => $this->input->post('level')
		);
		if(!$this->m_user->edit_user($edit)) {
			redirect(base_url('admin/users?edit=error'), 'refresh');
		} else {
			redirect(base_url('admin/users?edit=success'), 'refresh');
		}
	}
	public function do_edit_divisi() { // EDIT DATA DIVISI
		$edit = array(
			'id_div' => $this->input->post('id_div'),
			'nm_div' => $this->input->post('nm_div')
		);
		if(!$this->m_divjab->edit_divisi($edit)) {
			redirect(base_url('admin/divisi?edit=error'), 'refresh');
		} else {
			redirect(base_url('admin/divisi?edit=success'), 'refresh');
		}
	}
	public function do_edit_jabatan() { // EDIT DATA JABATAN
		$edit = array(
			'id_jab' => $this->input->post('id_jab'),
			'nm_jab' => $this->input->post('nm_jab')
		);
		if(!$this->m_divjab->edit_jabatan($edit)) {
			redirect(base_url('admin/jabatan?edit=error'), 'refresh');
		} else {
			redirect(base_url('admin/jabatan?edit=success'), 'refresh');
		}
	}
	public function do_edit_proyek() { // EDIT DATA PROYEK
		$update = array(
			'id_proy' => $this->input->post('id_proy'),
			'nm_proy' => $this->input->post('nm_proy'),
			'pim_proy' => $this->input->post('pim_proy'),
			'desk_proy' => $this->input->post('desk_proy'),
			'tgl_mulai' => $this->input->post('tgl_mulai'),
			'tgl_selesai' => $this->input->post('tgl_selesai'),
		);
		if(!empty($_FILES['img_proy']['name'])) { //* JIKA ADA PERUBAHAAN GAMBAR MAKA LAKUKAN PROSES UPLOAD
			$this->load->library('upload');
	        $config['upload_path']          = './assets/vendor/img/works';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 10048;
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('img_proy')) {
	        	$uploadData = (object)$this->upload->data();
				$update['img_proy'] = $uploadData->file_name;
			} else {
				redirect(base_url('admin/proyek?edit=error'), 'refresh');
			}
		}
		if (!$this->m_produk->edit_proyek($update)) {
			redirect(base_url('admin/proyek?edit=error'), 'refresh');
		} else {
			redirect(base_url('admin/proyek?edit=success'), 'refresh');
		}
	}
	public function do_edit_karyawan() { // EDIT DATA KARYAWAN
		$update = array(
			'id_kar' => $this->input->post('id_kar'),
			'nm_kar' => $this->input->post('nm_kar'),
			'jk_kar' => $this->input->post('jk_kar'),
			'id_div' => $this->input->post('id_div'),
			'id_jab' => $this->input->post('id_jab')
		);
		if(!empty($_FILES['foto_kar']['name'])) { //* JIKA ADA PERUBAHAAN GAMBAR MAKA LAKUKAN PROSES UPLOAD
			$this->load->library('upload');
	        $config['upload_path']          = './assets/vendor/img/foto';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 10048;
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('foto_kar')) {
	        	$uploadData = (object)$this->upload->data();
				$update['foto_kar'] = $uploadData->file_name;
			} else {
				redirect(base_url('admin/karyawan?edit=error'), 'refresh');
			}
		}
		if (!$this->m_kar->edit_karyawan($update)) {
			redirect(base_url('admin/karyawan?edit=error'), 'refresh');
		} else {
			redirect(base_url('admin/karyawan?edit=success'), 'refresh');
		}
	}
	public function do_edit_perusahaan() { // EDIT DATA PROFIL PERUSAHAAN
		$getProfil = $this->m_profil->get_profil();
		if($getProfil->id_privileges !== $this->session->u_login->id) redirect(base_url('admin/profil_company?edit=denied'), 'refresh');
		$update = array(
			'nm_perusahaan' => $this->input->post('nm_perusahaan'),
			'desk_perusahaan' => $this->input->post('desk_perusahaan'),
			'visi' => $this->input->post('visi'),
			'misi' => $this->input->post('misi'),
			'sejarah' => $this->input->post('sejarah'),
			'alamat' => $this->input->post('alamat'),
			'telp' => $this->input->post('telp'),
			'email' => $this->input->post('email')
		);
		if(!$this->m_profil->edit_profil($update)) {
			redirect(base_url('admin/profil_company?edit=error'), 'refresh');
		} else {
			redirect(base_url('admin/profil_company?edit=success'), 'refresh');
		}
	}

	/*---------------------------------
	** FUNCTION DELETE DATA
	**----------------------------------*/
	public function do_delete_kar($id) {
		$this->m_kar->delete_karyawan($id);
		redirect(base_url('admin/karyawan?delete=success'), 'refresh');
	}
	public function do_delete_proy($id) {
		$this->m_produk->delete_proyek($id);
		redirect(base_url('admin/proyek'), 'refresh');
	}
	public function do_delete_jab($id) {
		$this->m_divjab->delete_jabatan($id);
		redirect(base_url('admin/jabatan'), 'refresh');
	}
	public function do_delete_div($id) {
		$this->m_divjab->delete_divisi($id);
		redirect(base_url('admin/divisi'), 'refresh');
	}
	public function do_delete_user($id) {
		$this->m_user->delete_user($id);
		redirect(base_url('admin/users'), 'refresh');
	}

	/*---------------------------------
	** FUNCTION UNTUK MENAMBAH DATA
	**----------------------------------*/
	public function do_add_jabatan() {
		$insert = array('nm_jab' => $this->input->post('nm_jab'));
		if(!$this->m_divjab->add_jabatan($insert)) {
			redirect(base_url('admin/jabatan?add=error'), 'refresh');
		} else {
			redirect(base_url('admin/jabatan?add=success'), 'refresh');
		}
	}
	public function do_add_divisi() {
		$insert = array('nm_div' => $this->input->post('nm_div'));
		if(!$this->m_divjab->add_divisi($insert)) {
			redirect(base_url('admin/divisi?add=error'), 'refresh');
		} else {
			redirect(base_url('admin/divisi?add=success'), 'refresh');
		}
	}
	public function do_add_user() {
		$insert = array(
			'username' => $this->input->post('username'),
			'password' => password_hash($this->input->post('username'), PASSWORD_BCRYPT),
			'level' => $this->input->post('level')
		);
		if(!$this->m_user->add_user($insert)) {
			redirect(base_url('admin/users?add=error'), 'refresh');
		} else {
			redirect(base_url('admin/users?add=success'), 'refresh');
		}
	}
	public function do_upload_proyek() {
		$this->load->library('upload');
        $config['upload_path']          = './assets/vendor/img/works';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('img_proy')) {
        	$error = array('error' => $this->upload->display_errors());
        	redirect(base_url('admin/proyek?upload=error'), 'refresh');
  		} else {
  			$uploadData = (object)$this->upload->data();
  			$insert = array(
	        	'nm_proy' => $this->input->post('nm_proy'),
	        	'pim_proy' => $this->input->post('pim_proy'),
	        	'desk_proy' => $this->input->post('desk_proy'),
	        	'tgl_mulai' => $this->input->post('tgl_mulai'),
	        	'tgl_selesai' => $this->input->post('tgl_selesai'),
	        	'img_proy' => $uploadData->file_name
	        );
			$this->m_produk->add_proyek($insert);
			redirect(base_url('admin/proyek?upload=success'), 'refresh');
		}
	}
	public function do_upload_karyawan() {
		$this->load->library('upload');
		$file_ext 						= $this->upload->data('foto_kar')['file_ext'];
		$config['file_name'] 			= strtolower($this->input->post('nm_kar').$file_ext);
        $config['upload_path']          = './assets/vendor/img/foto';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 500;
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_kar')) {
        	$error = array('error' => $this->upload->display_errors());
        	print_r($error);exit();
        	redirect(base_url('admin/karyawan?upload=error'), 'refresh');
  		} else {
  			$uploadData = (object)$this->upload->data();
  			$insert = array(
	        	'nm_kar' => $this->input->post('nm_kar'),
	        	'jk_kar' => $this->input->post('jk_kar'),
	        	'id_div' => $this->input->post('id_div'),
	        	'id_jab' => $this->input->post('id_jab'),
	        	'foto_kar' => $uploadData->file_name
	        );
			$this->m_kar->add_karyawan($insert);
			redirect(base_url('admin/karyawan?upload=success'), 'refresh');
		}
	}

	/*---------------------------------------------/
	** FUNCTION MENGAMBIL DATA UNTUK RESPONS AJAX
	**--------------------------------------------*/
	function get_data($table, $id) {
		if($table == 'user') {
			$data = $this->m_user->get_where($id);
		} elseif($table == 'divisi') {
			$data = $this->m_divjab->get_where('tb_divisi', $id);
		} elseif($table == 'jabatan') {
			$data = $this->m_divjab->get_where('tb_jabatan', $id);
		} elseif($table == 'proyek') {
			$data = $this->m_produk->get_where($id);
		} elseif($table == 'karyawan') {
			$data = $this->m_kar->get_where($id);
		}
		return $this->m_user->json($data);
	}
}

?>