<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model
{
    public function getAllGuru()
    {
        return $this->db->get('tb_guru')->result_array();
    }

    public function insertGuru()
    {
        $data = [
            'nip' => $this->input->post('nip'),
            'nama' => $this->input->post('nama'),
            'jenis_kelamin' => $this->input->post('jk'),
            'alamat' => $this->input->post('alamat')
        ];

        return $this->db->insert('tb_guru', $data);
    }

    public function getOneGuru($id)
    {
        return $this->db->get_where('tb_guru', ['id' => $id])->row_array();
    }
}
