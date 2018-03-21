<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Produk_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
    public function get_where($id) {
        $query = $this->db->get_where('tb_proyek', array('id_proy' => $id));
        return $query->row();
    }
    public function get_all_proyek() {
    	$query = $this->db
                ->select('*')
                ->from('tb_proyek p')
                ->join('tb_karyawan k', 'p.pim_proy = k.id_kar')
                ->get();
        return $query->result();
    }
    public function get_proyek_detail($id_proy) {
        $query = $this->db
                ->select('*')
                ->from('tb_proyek p')
                ->join('tb_karyawan k', 'p.pim_proy = k.id_kar')
                ->where('p.id_proy', $id_proy)
                ->get();
        return $query->row();
    }
    public function get_proyek_karyawan($id_kar) {
        $query = $this->db
                ->select('*')
                ->from('tb_terlibat t')
                ->join('tb_proyek k', 'k.id_proy = t.id_proy')
                ->where('t.id_kar', $id_kar)
                ->get();
        return $query->result();
    }
    public function add_proyek($data) {
        return $this->db->insert('tb_proyek', $data);
    }
    public function edit_proyek($data) {
        return $this->db->update('tb_proyek', $data, array('id_proy' => $data['id_proy']));
    }
    public function delete_proyek($id) {
        return $this->db->where('id_proy', $id)->delete('tb_proyek');
    }
}

?>