<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_jurusan() {
        $query = $this->db->get('jurusan');
        return $query->result();
    }

    public function insert_jurusan($data) {
        return $this->db->insert('jurusan', $data);
    }

    public function get_jurusan_by_kode($kode_jurusan) {
        $query = $this->db->get_where('jurusan', array('kode_jurusan' => $kode_jurusan));
        return $query->row();
    }

    public function update_jurusan($kode_jurusan, $data) {
        $this->db->where('kode_jurusan', $kode_jurusan);
        return $this->db->update('jurusan', $data);
    }

    public function delete_jurusan($kode_jurusan) {
        return $this->db->delete('jurusan', array('kode_jurusan' => $kode_jurusan));
    }
}
?>
