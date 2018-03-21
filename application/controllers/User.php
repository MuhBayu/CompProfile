<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->session->has_userdata('u_name')) redirect(base_url());
		$this->id_kar = $this->session->u_login->id;
	}
	function index() {
		$this->config->set_item('page_title', 'Profil - User');
		$profil = $this->m_user->get_user_karyawan($this->id_kar);
		$this->load->view('template/user/header');
		$this->load->view('user/index', ['profil' => $profil]);
		$this->load->view('template/user/footer');
	}
	function proyek() {
		$this->config->set_item('page_title', 'Terlibat - User');
		$proyek = $this->m_produk->get_proyek_karyawan($this->id_kar);
		$this->load->view('template/user/header');
		$this->load->view('user/u_proyek', ['proyek' => $proyek]);
		$this->load->view('template/user/footer');
	}
	function pengaturan() {
		$this->config->set_item('page_title', 'Pengaturan - User');
		$profil = $this->m_user->get_user_karyawan($this->id_kar);
		$this->load->view('template/user/header');
		$this->load->view('user/u_pengaturan', ['profil' => $profil]);
		$this->load->view('template/user/footer');
	}
	function do_update_password() {
		$pass = $this->input->post('old_pass');
		$update = array(
			'id' => $this->session->u_login->id,
			'password' => password_hash($this->input->post('new_pass'), PASSWORD_BCRYPT)
		);
		$login = $this->m_user->checkLogin($this->session->u_name, $pass);
		if(!$login) {
			return $this->m_user->json(array('success' => false, 'msg' => "Password lama salah.."));
		} else {
			$this->m_user->edit_user($update);
			return $this->m_user->json(array('success' => true, 'msg' => "Password berhasil diubah.."));
		}
	}
	function do_update_dataprofil() {
		$update = array(
			'id_kar' => $this->id_kar,
			'nm_kar' => $this->input->post('nm_kar'),
			'jk_kar' => $this->input->post('jk_kar')
		);
		if(!empty($_FILES['foto_kar']['name'])) {
			$this->load->library('upload');
			$file_ext 						= pathinfo($_FILES['foto_kar']['name'], PATHINFO_EXTENSION);;
			$config['file_name']			= $this->session->u_name.'.'.$file_ext;
	        $config['upload_path']          = './assets/vendor/img/foto';
	        $config['allowed_types']        = 'gif|jpg|png|jpeg';
	        $config['max_size']             = 1048000;
	        $this->upload->initialize($config);
	        if ($this->upload->do_upload('foto_kar')) {
	        	$uploadData = (object)$this->upload->data();
				$update['foto_kar'] = $uploadData->file_name;
			} else {
				redirect(base_url('user/pengaturan?update=error'), 'refresh');
			}
		}
		if (!$this->m_kar->edit_karyawan($update)) {
			redirect(base_url('user/pengaturan?update=error'), 'refresh');
		} else {
			redirect(base_url('user/pengaturan?update=success'), 'refresh');
		}
	}
}
?>