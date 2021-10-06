<?php

class student extends CI_Controller {

    public function index() {

        $this->load->view('view-form-student');
    }

    public function cetak() {
        $data = [
            'nim' => $this->input->post('nim'), 
            'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
		    'usia' => $this->input->post('usia')];
        $this->load->view('view-data-student', $data);
    }

} 
