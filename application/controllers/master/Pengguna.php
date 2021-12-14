<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('pengguna_m');
    }

    public function index()
    {
        $data['master'] = $data['pengguna'] = true;
        $data['pengguna_all'] = $this->pengguna_m->getAll();
        $data['content'] = 'master/pengguna';
        $this->load->view('index', $data);
    }

    public function add()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Email telah di gunakan !');
        } else {
            $data = [
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'level' => 'user'
            ];
            $this->pengguna_m->tambah($data);
            $this->session->set_flashdata('success', 'Data pengguna berhasil di tambahkan');
        }
        redirect('master/pengguna');
    }

    public function delete($id)
    {
        $this->pengguna_m->hapus($id);
        $this->session->set_flashdata('success', 'Data pengguna berhasil di hapus');
        redirect('master/pengguna');
    }

    public function pengguna()
    {
        $data['master'] = $data['pengguna'] = true;
        $data['pengguna_all'] = $this->pengguna_m->getpengguna();
        $data['content'] = 'master/pengguna';
        $this->load->view('index', $data);
    }

    public function penggunatambah()
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            if ($this->input->post('level') == "user") {
                $nim = $this->input->post('nim', true);
            } else {
                $nim = "";
            }
            $data = [
                'nim' => $nim,
                'nik' => $this->input->post('nik', true),
                'nama' => $this->input->post('nama', true),
                'tempatlahir' => $this->input->post('tempatlahir', true),
                'tanggallahir' => $this->input->post('tanggallahir', true),
                'jeniskelamin' => $this->input->post('jeniskelamin', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'notlp' => $this->input->post('notlp', true),
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
                'level' => $this->input->post('level', true),
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('success', 'Pengguna Berhasil Di Input');
            redirect('master/pengguna/pengguna');
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'master/penggunainput';
        $this->load->view('index', $data);
    }

    public function penggunaedit($id)
    {
        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'nik' => $this->input->post('nik', true),
                'nama' => $this->input->post('nama', true),
                'tempatlahir' => $this->input->post('tempatlahir', true),
                'tanggallahir' => $this->input->post('tanggallahir', true),
                'jeniskelamin' => $this->input->post('jeniskelamin', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),
                'pekerjaan' => $this->input->post('pekerjaan', true),
                'notlp' => $this->input->post('notlp', true),
                'email' => $this->input->post('email', true),
                'level' => $this->input->post('level', true),
            ];
            if ($this->input->post('level') == "user") {
                $data['nim'] = $this->input->post('nim', true);
            }
            $this->db->set($data);
            $this->db->where('iduser', $id);
            $this->db->update('user');
            $password = $this->input->post('password', true);
            if ($password != "") {
                $data = [
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                ];
                $this->auth_m->updatePass($data, $id);
            }
            $this->session->set_flashdata('success', 'Pengguna Berhasil Di Edit');
            redirect('master/pengguna/pengguna');
        }
        $data['profil'] = $this->auth_m->getme($id);
        $data['content'] = 'master/penggunaedit';
        $this->load->view('index', $data);
    }

    public function penggunadelete($id)
    {
        $this->pengguna_m->hapus($id);
        $this->session->set_flashdata('success', 'Pengguna berhasil di hapus');
        redirect('master/pengguna/pengguna');
    }
}
