<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
    public function get_all_user() {
    	$query = $this->db->from('tb_user')->get();
    	return $query->result();
    }
    public function get_where($id) {
        $query = $this->db->get_where('tb_user', array('id' => $id));
        return $query->row();
    }
    public function get_user_karyawan($id) {
         $query = $this->db
                ->from('tb_user u')
                ->join('tb_karyawan k', 'k.id_kar = u.id', 'right')
                ->join('tb_jabatan j', 'j.id_jab = k.id_jab', 'left')
                ->join('tb_divisi d', 'd.id_div = k.id_div', 'left')
                ->where('k.id_kar', $id)
                ->where('j.id_jab = k.id_jab')
                ->get();
        return $query->row();
    }
	public function checkLogin($user, $pass) {
		$query = $this->db->get_where('tb_user', array('username' => $user));
		if($query->num_rows() > 0) {
			$row = $query->row();
			if(password_verify(trim($pass), trim($row->password))) {
		    	return $row;
		    } return false;
		} return false;
	}
	public function add_user($data) {
		$cekdulu = $this->db->get_where('tb_user', array('username' => $data['username']));
        if($cekdulu->num_rows() > 0) {
            return false;
        } else {
            return $this->db->insert('tb_user', $data);
        }
    }
    public function delete_user($id) {
        return $this->db->where('id', $id)->delete('tb_user');
    }
    public function edit_user($data) {
        return $this->db->update('tb_user', $data, array('id' => $data['id']));
    }
	public function json($output, $header=200) {
		return $this->output
            ->set_content_type('application/json')
            ->set_status_header($header)
            ->set_output(json_encode($output, JSON_PRETTY_PRINT));
	}
}
?>