<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Jurusan_model');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['jurusan'] = $this->Jurusan_model->get_all_jurusan();
        
        $this->load->view('templates/header');
        $this->load->view('jurusan/index', $data);
        $this->load->view('templates/footer');
    }

    public function create() {
        $this->load->view('jurusan/create');
    }

    public function store() {
        $this->form_validation->set_rules('kode_jurusan', 'Kode Jurusan', 'required');
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('jurusan/create');
        } else {
            $data = array(
                'kode_jurusan' => $this->input->post('kode_jurusan'),
                'nama_jurusan' => $this->input->post('nama_jurusan')
            );

            $this->Jurusan_model->insert_jurusan($data);
            redirect('jurusan');
        }
    }

    public function edit($kode_jurusan) {
        $data['jurusan'] = $this->Jurusan_model->get_jurusan_by_kode($kode_jurusan);
        $this ->load->view('templates/header');
        $this->load->view('jurusan/jurusan_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($kode_jurusan) {
        $this->form_validation->set_rules('nama_jurusan', 'Nama Jurusan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['jurusan'] = $this->Jurusan_model->get_jurusan_by_kode($kode_jurusan);
            $this->load->view('jurusan/jurusan_edit', $data);
        } else {
            $data = array(
                'nama_jurusan' => $this->input->post('nama_jurusan')
            );

            $this->Jurusan_model->update_jurusan($kode_jurusan, $data);
            redirect('jurusan');
        }
    }

    public function delete($kode_jurusan) {
        $this->Jurusan_model->delete_jurusan($kode_jurusan);
        redirect('jurusan');
    }
}
?>
