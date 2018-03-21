<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
	public $m_user = NULL;
	public $m_produk = NULL;
	public $m_profil = NULL;
    public $m_kar = NULL;
    public $m_divjab = NULL;
    public function __construct() {
    	parent::__construct();
    	$this->load->model('Produk_model');
    	$this->load->model('Profil_model');
        $this->load->model('Karyawan_model');
        $this->load->model('DivisiJab_model');
        $this->m_user   = $this->User_model;
        $this->m_produk = $this->Produk_model;
        $this->m_profil = $this->Profil_model;
        $this->m_kar    = $this->Karyawan_model;
        $this->m_divjab = $this->DivisiJab_model;
        $this->cfg      = $this->config;
        $this->load->library("simple_html_dom");
    }
}

?>