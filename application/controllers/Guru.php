<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Guru_model');
        $this->load->library('form_validation'); // Load library form validation
        $this->load->helper('url');

    }

    public function index() {
        // Mengambil data semua guru
        $data['guru'] = $this->Guru_model->get_all_guru();

        // Memuat view dengan data guru
        $this->load->view('templates/header');
        $this->load->view('guru/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function tambah() {
        // Menampilkan form tambah guru
        
        $this->load->view('guru/tambah');
        
    }

    public function simpan() {
        // Validasi input
        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama_guru', 'Nama Guru', 'required');
        // tambahkan validasi untuk email dan alamat jika diperlukan

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form tambah guru dengan pesan error
            $this->load->view('templates/header');
            $this->load->view('guru/tambah');
            $this->load->view('templates/footer');
        } else {
            // Jika validasi berhasil, proses penyimpanan data
            $data = array(
                'nip' => $this->input->post('nip'),
                'nama_guru' => $this->input->post('nama_guru'),
                'email' => $this->input->post('email'),
                'alamat' => $this->input->post('alamat')
            );

            // Memanggil model untuk tambah guru
            $this->Guru_model->tambah_guru($data);

            // Redirect ke halaman utama guru setelah berhasil menyimpan
            redirect('guru');
        }
    }

    public function hapus($nip) {
        // Hapus data guru berdasarkan ID
        $this->Guru_model->hapus_guru($nip);

        // Redirect ke halaman utama guru setelah berhasil menghapus
        redirect('guru');
    }
    public function edit($nip) {
        $data['guru'] = $this->Guru_model->get_guru_by_nip($nip);
        if (!$data['guru']) {
            show_404(); // Tampilkan 404 jika data guru tidak ditemukan
        }    

        $this->load->view('templates/header');
        $this->load->view('guru/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update() {
        $nip = $this->input->post('nip');
        $data = [
            'nama_guru' => $this->input->post('nama_guru'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat')
        ];

        if ($this->Guru_model->update_guru($nip, $data)) {
            $this->session->set_flashdata('message', 'Data berhasil diupdate!');
        } else {
            $this->session->set_flashdata('message', 'Gagal mengupdate data!');
        }

        redirect('guru/edit/' . $nip);
    }
    

}
