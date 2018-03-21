<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
    public function get_where($id) {
        $query = $this->db->get_where('tb_karyawan', array('id_kar' => $id));
        return $query->row();
    }
    public function jum_data($table) {
        return $this->db->count_all_results($table);
    }
    public function get_all_karyawan() {
        $query = $this->db
                ->select('*')
                ->from('tb_karyawan k')
                ->join('tb_divisi d', 'd.id_div = k.id_div', 'right')
                ->join('tb_jabatan j', 'j.id_jab = k.id_jab', 'right')
                ->where('k.id_kar != ""')
                ->order_by('id_kar ASC')
                ->get();
        return $query->result();
    }
    public function get_terlibat($id_proy) {
        $query = $this->db
                ->select('*')
                ->from('tb_proyek p')
                ->join('tb_terlibat t', 't.id_proy = p.id_proy', 'left')
                ->join('tb_karyawan k', 'k.id_kar = t.id_kar', 'right')
                ->where('t.id_proy', $id_proy)
                ->get();
        return $query->result();
    }
    public function get_nm_karyawan($id) {
        $query = $this->db
                ->select('nm_kar')
                ->from('tb_karyawan')
                ->where('id_kar', $id)
                ->get();
        return $query->row();
    }
    public function add_karyawan($data) {
        return $this->db->insert('tb_karyawan', $data);
    }
    public function edit_karyawan($data) {
        return $this->db->update('tb_karyawan', $data, array('id_kar' => $data['id_kar']));
    }
    public function delete_karyawan($id) {
        return $this->db->where('id_kar', $id)->delete('tb_karyawan');
    }
}

?>