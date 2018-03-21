<?php defined('BASEPATH') OR exit('No direct script access allowed');
class DivisiJab_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
    public function get_all_divisi() {
        $query = $this->db->from('tb_divisi')->get();
        return $query->result();
    }
    public function get_all_jabatan() {
        $query = $this->db->from('tb_jabatan')->get();
        return $query->result();
    }
    public function get_divisi($id_div) {
        $query = $this->db
                ->from('tb_karyawan k')
                ->join('tb_divisi d', 'd.id_div = k.id_div', 'right')
                ->join('tb_jabatan j', 'j.id_jab = k.id_jab', 'right')
                ->where('d.id_div', $id_div)
                ->get();
        return $query->result();
    }
    public function get_where($table, $id) {
        if($table == 'tb_divisi') {
            $where = 'id_div';
        } elseif ($table == 'tb_jabatan') {
            $where = 'id_jab';
        }
        $query = $this->db->get_where($table, array($where => $id));
        return $query->row();
    }
    public function get_nm_divisi() {
        $query = $this->db
                ->select('*')
                ->from('tb_divisi')
                ->get();
        return $query->result();
    }
    public function add_jabatan($data) {
        $cekdulu = $this->db->get_where('tb_jabatan', array('nm_jab' => $data['nm_jab']));
        if($cekdulu->num_rows() > 0) {
            return false;
        } else {
            return $this->db->insert('tb_jabatan', $data);
        }
    }
    public function add_divisi($data) {
        $cekdulu = $this->db->get_where('tb_divisi', array('nm_div' => $data['nm_div']));
        if($cekdulu->num_rows() > 0) {
            return false;
        } else {
            return $this->db->insert('tb_divisi', $data);
        }
    }
    public function edit_jabatan($data) {
        return $this->db->update('tb_jabatan', $data, array('id_jab' => $data['id_jab']));
    }
    public function edit_divisi($data) {
        return $this->db->update('tb_divisi', $data, array('id_div' => $data['id_div']));
    }
    public function delete_jabatan($id) {
        return $this->db->where('id_jab', $id)->delete('tb_jabatan');
    }
    public function delete_divisi($id) {
        return $this->db->where('id_div', $id)->delete('tb_divisi');
    }
}

?>