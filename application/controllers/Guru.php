<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_guru');
    }

    public function index()
    {

        $data['judul'] = 'Data Guru';
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
        $data['formulir'] = 'Formulir data guru';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/topbar');
        $this->load->view('guru/tambah', $data);
        $this->load->view('template/footer');
    }
}
