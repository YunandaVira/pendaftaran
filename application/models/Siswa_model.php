<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_siswa() {
        $query = $this->db->get('siswa');
        return $query->result();
    }

    public function insert_siswa($data) {
        return $this->db->insert('siswa', $data);
    }

    public function get_siswa_by_nis($nis) {
        $query = $this->db->get_where('siswa', array('nis' => $nis));
        return $query->row();
    }

    public function update_siswa($nis, $data) {
        $this->db->where('nis', $nis);
        return $this->db->update('siswa', $data);
    }

    public function delete_siswa($nis) {
        return $this->db->delete('siswa', array('nis' => $nis));
    }
}
?>
