<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
        $this->load->library('form_validation');
    }

    public function index()
    {

        $data['judul'] = 'Data Guru';
        $data['judul_laman'] = 'Formulir data guru';
        $data['guru'] = $this->M_guru->getAllGuru();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('guru/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah Data Guru';
        $data['judul_laman'] = 'Formulir data guru';

        $this->form_validation->set_rules('nip', 'NIP', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/topbar');
            $this->load->view('guru/tambah', $data);
            $this->load->view('template/footer');
        } else {
            $this->M_guru->insertGuru();

            redirect(base_url('guru'));
        }
    }
}
