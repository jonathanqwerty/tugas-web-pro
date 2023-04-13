<?php
defined('BASEPATH') or exit('no direct script asccess allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header', $data);
        $this->load->view('v_index', $data);
        $this->load->view('v_footer', $data);
    }

    public function about()
    {
        $data['judul'] = "Halaman About";
        $this->load->view('v_header', $data);
        $this->load->view('v_about', $data);
        $this->load->view('v_footer', $data);
    }

    public function form()
    {
        $data['judul'] = "Halaman Form";
        $this->load->view('v_header', $data);
        $this->load->view('v_form', $data);
        $this->load->view('v_footer', $data);
    }

    public function cetak()
    {
        // $this->form_validation->set_rules(
        //     'kode',
        //     'Kode Matakuliah',
        //     'required|min_length[3]',
        //     [
        //         'required' => 'Kode Matakuliah Harus diisi',
        //         'min_lenght' => 'Kode terlalu pendek'
        //     ]
        // );
        // $this->form_validation->set_rules(
        //     'nama',
        //     'Nama Matakuliah',
        //     'required|min_length[3]',
        //     [
        //         'required' => 'Nama Matakuliah Harus diisi',
        //         'min_lenght' => 'Nama terlalu pendek'
        //     ]
        // );
        // if ($this->form_validation->run() != true) {
        //     $this->load->view('view-form-matakuliah');
        // } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        // }
    }
}
