<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_m');
    }
    
    public function index()
    {
        $this->load->view('home/home');
    }

    public function jadwalpelayanan()
    {
        $this->load->view('home/jadwalpelayanan');
    }

    public function informasi()
    {
        $data['berita_all'] = $this->berita_m->getberita();
        $this->load->view('home/informasi', $data);
    }

    public function petunjuklogin()
    {
        $this->load->view('home/petunjuklogin');
    }

    public function bantuan()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'nama' => $this->input->post('nama', true),
                'email' => $this->input->post('email', true),
                'nohp' => $this->input->post('nohp', true),
                'pesan' => $this->input->post('pesan', true),
            ];
            $this->db->insert('bantuan', $data);
            $this->session->set_flashdata('success', 'Data Berhasil Di Simpan');
            redirect('home/bantuan');
        }
        $this->load->view('home/bantuan');
    }

}
