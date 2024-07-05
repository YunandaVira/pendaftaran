<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_kelas() {
        $query = $this->db->get('kelas');
        return $query->result();
    }

    public function insert_kelas($data) {
        return $this->db->insert('kelas', $data);
    }

    public function get_kelas_by_kode($kode_kelas) {
        $query = $this->db->get_where('kelas', array('kode_kelas' => $kode_kelas));
        return $query->row();
    }

    public function update_kelas($kode_kelas, $data) {
        $this->db->where('kode_kelas', $kode_kelas);
        return $this->db->update('kelas', $data);
    }

    public function delete_kelas($kode_kelas) {
        return $this->db->delete('kelas', array('kode_kelas' => $kode_kelas));
    }
}
?>
