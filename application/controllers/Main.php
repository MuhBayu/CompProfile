<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	public function index() {
		$this->simple_html_dom->load('<html><body>Hello!</body></html>');
		$data = array(
			'produk' => $this->m_produk->get_all_proyek(),
			'profil' => $this->m_profil->get_profil()
		);
		$this->load->view('template/header');
		$this->load->view('v_index', $data);
		$this->load->view('template/footer', ['profil' => $this->m_profil->get_profil()]);
	}
	public function logout() {
		$this->session->unset_userdata('u_name');
		redirect(base_url(), 'refresh');
	}
	public function proyek() {
		$this->config->set_item('page_title', 'Portofolio');
		$data = array('produk' => $this->m_produk->get_all_proyek());
		$this->load->view('template/header');
		$this->load->view('v_portfolio', $data);
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
	public function detail_proyek($id_proy) {
		$proyek = $this->m_produk->get_proyek_detail($id_proy);
		$terlibat = $this->m_kar->get_terlibat($id_proy);
		$this->config->set_item('page_title', 'Portofolio');
		$this->load->view('template/header');
		$this->load->view('v_detail_proyek', ['proyek' => $proyek, 'terlibat' => $terlibat]);
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
	public function typography() {
		$this->config->set_item('page_title', 'Typography');
		$this->load->view('template/header');
		$this->load->view('v_typography');
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
	public function divisi($id) {
		if(!$this->session->has_userdata('u_name')) redirect(base_url());
		$divisi = $this->m_divjab->get_divisi($id);
		$this->config->set_item('page_title', 'Divisi');
		$this->load->view('template/header');
		$this->load->view('v_divisi', ['divisi' => $divisi]);
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
	public function divisiAll() {
		if(!$this->session->has_userdata('u_name')) redirect(base_url());
		$nm_divisi = $this->m_kar->get_nm_divisi();
		foreach ($nm_divisi as $key => $d) {
			$divisi[] = $this->m_divjab->get_divisi($d->id_div, TRUE);
		}

		$this->config->set_item('page_title', 'Divisi');
		$this->load->view('template/header');
		$this->load->view('v_divisiall', ['nm_divisi' => $nm_divisi, 'divisi' => $divisi]);
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
	public function karyawan() {
		if(!$this->session->has_userdata('u_name')) redirect(base_url());
		$karyawan = $this->m_kar->get_all_karyawan();
		$this->config->set_item('page_title', 'Divisi');
		$this->load->view('template/header');
		$this->load->view('v_karyawan', ['karyawan' => $karyawan]);
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
	public function tentang() {
		$this->config->set_item('page_title', 'Tentang');
		$this->load->view('template/header');
		$this->load->view('v_contact');
		$this->load->view('template/footer', [ 'profil' => $this->m_profil->get_profil() ]);
	}
}
