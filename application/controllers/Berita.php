<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('berita_m');
    }


    public function index()
    {
        $data['master'] = $data['berita'] = true;
        $data['berita_all'] = $this->berita_m->getberita();
        $data['content'] = 'berita';
        $this->load->view('index', $data);
    }

    public function beritadelete($id)
    {
        $this->berita_m->hapus($id);
        $this->session->set_flashdata('success', 'Berita berhasil di hapus');
        redirect('berita');
    }

    public function beritatambah()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            if (!empty($_FILES)) {
                $config['upload_path']          = getcwd() . '/assets/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5024;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $filename = $data['upload_data']['file_name'];
                    $data = [
                        'judul' => $this->input->post('judul', true),
                        'deskripsi' => $this->input->post('deskripsi', true),
                        'foto' => $filename,
                    ];
                    $this->db->insert('berita', $data);
                    $this->session->set_flashdata('success', 'Berita Berhasil Di Input');
                    redirect('berita');
                }
            }
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'beritainput';
        $this->load->view('index', $data);
    }

    public function beritaedit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            if (!empty($_FILES)) {
                $config['upload_path']          = getcwd() . '/assets/upload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 5024;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    $data = [
                        'judul' => $this->input->post('judul', true),
                        'deskripsi' => $this->input->post('deskripsi', true),
                    ];
                    $this->db->set($data);
                    $this->db->where('idberita', $id);
                    $this->db->update('berita');
                    $this->session->set_flashdata('success', 'Berita Berhasil Di Edit');
                    redirect('berita');
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $filename = $data['upload_data']['file_name'];
                    $data = [
                        'judul' => $this->input->post('judul', true),
                        'deskripsi' => $this->input->post('deskripsi', true),
                        'foto' => $filename,
                    ];
                    $this->db->set($data);
                    $this->db->where('idberita', $id);
                    $this->db->update('berita');
                    $this->session->set_flashdata('success', 'Berita Berhasil Di Edit');
                    redirect('berita');
                }
            }
        }
        $data['profil'] = $this->berita_m->getberitabyid($id);
        $data['content'] = 'beritaedit';
        $this->load->view('index', $data);
    }
}
