<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {
	function __construct() {
		parent::__construct();
		
	}
	public function index() {
		if($this->session->has_userdata('u_name')) redirect(base_url());
		$this->load->view('template/header');
		$this->load->view('v_login');
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}

	/*---------------------------------
	** FUNCTION UNTUK CEK LOGIN
	**----------------------------------*/
	public function authLogin() {
		if($this->input->post()) {
			$user = $this->input->post('username');
			$pass = $this->input->post('upassword');
			$login = $this->m_user->checkLogin($user, $pass);
			if($login) {
				$output = array('success' => true, 'login' => $login);
				$this->session->set_userdata('u_login', $login);
				$this->session->set_userdata('u_name', $login->username);
				$this->session->set_userdata('u_level', $login->level);
				return $this->m_user->json($output);
			} else {
				$output = array('success' => false, 'login' => null);
				return $this->m_user->json($output);
			}
		}
	}
}
