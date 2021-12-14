<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('pengguna_m');
    }

    public function index()
    {
        $data['master'] = $data['bantuan'] = true;
        $data['bantuan_all'] = $this->pengguna_m->getbantuan();
        $data['content'] = 'bantuan';
        $this->load->view('index', $data);
    }

    public function delete($id)
    {
        $this->pengguna_m->hapusbantuan($id);
        $this->session->set_flashdata('success', 'Data bantuan berhasil di hapus');
        redirect('bantuan');
    }

}