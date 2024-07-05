<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Kelas_model'); // Menggunakan model Kelas_model
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['kelas'] = $this->Kelas_model->get_all_kelas(); // Mengambil data dari Kelas_model
        
        $this->load->view('templates/header');
        $this->load->view('kelas/index', $data); // Mengarahkan ke view index pada folder kelas
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->view('kelas/create'); // Menampilkan view create pada folder kelas
    }

    public function store() {
        $this->form_validation->set_rules('kode_kelas', 'Kode Kelas', 'required');
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('kelas/create');
        } else {
            $data = array(
                'kode_kelas' => $this->input->post('kode_kelas'),
                'nama_kelas' => $this->input->post('nama_kelas'),
                'kapasitas' => $this->input->post('kapasitas')
            );

            $this->Kelas_model->insert_kelas($data);
            redirect('kelas');
        }
    }

    public function edit($kode_kelas) {
        $data['kelas'] = $this->Kelas_model->get_kelas_by_kode($kode_kelas);
        $this ->load->view('templates/header');
        $this->load->view('kelas/kelas_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($kode_kelas) {
        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('kapasitas', 'Kapasitas', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $data['kelas'] = $this->Kelas_model->get_kelas_by_kode($kode_kelas);
            $this->load->view('kelas/kelas_edit', $data);
        } else {
            $data = array(
                'nama_kelas' => $this->input->post('nama_kelas'),
                'kapasitas' => $this->input->post('kapasitas')
            );

            $this->Kelas_model->update_kelas($kode_kelas, $data);
            redirect('kelas');
        }
    }

    public function delete($kode_kelas) {
        $this->Kelas_model->delete_kelas($kode_kelas);
        redirect('kelas');
    }
}
?>
