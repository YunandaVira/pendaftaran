<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Siswa_model');
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['siswa'] = $this->Siswa_model->get_all_siswa();
        
        $this->load->view('templates/header');
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
        
    }

    public function create() {
       
        $this->load->view('siswa/siswa_create');
        
       
    }

    public function store() {
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telpon', 'Telepon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('siswa/siswa_create');
        } else {
            $data = array(
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon')
            );

            $this->Siswa_model->insert_siswa($data);
            redirect('siswa');
        }
    }

    public function edit($nis) {
        $data['siswa'] = $this->Siswa_model->get_siswa_by_nis($nis);
        $this ->load->view('templates/header');
        $this->load->view('siswa/siswa_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update($nis) {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('telpon', 'Telepon', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['siswa'] = $this->Siswa_model->get_siswa_by_nis($nis);
            $this->load->view('siswa/siswa_edit', $data);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'telpon' => $this->input->post('telpon')
            );

            $this->Siswa_model->update_siswa($nis, $data);
            redirect('siswa');
        }
    }

    public function delete($nis) {
        $this->Siswa_model->delete_siswa($nis);
        redirect('siswa');
    }
}
?>
