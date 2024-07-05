<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
    }

    public function get_all_guru() {
        $query = $this->db->get('guru');
        return $query->result();
    }

    public function tambah_guru($data) {
        return $this->db->insert('guru', $data);
    }

    public function hapus_guru($nip) {
        $this->db->where('nip', $nip);
        $this->db->delete('guru');
    }

    // application/models/Guru_model.php

     public function update_guru($nip, $data) {
        $this->db->where('nip', $nip);
        return $this->db->update('guru', $data);
    }
        
    public function get_guru_by_nip($nip) {
        $this->db->where('nip', $nip);
        $query = $this->db->get('guru');
        return $query->row(); // Mengembalikan satu baris data sebagai objek stdClass        
    }
        

}
