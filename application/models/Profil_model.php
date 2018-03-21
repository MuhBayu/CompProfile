<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Profil_model extends CI_Model {
	public function __construct() {
        parent::__construct();
    }
    public function get_profil() {
    	$query = $this->db
    			->select('*')
    			->from('tb_profil')
    			->get();
    	return $query->row();
    }
    public function edit_profil($data) {
        return $this->db->update('tb_profil', $data, array('id' => '1'));
    }
}

?>