<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth_m');
    }

    public function index()
    {
        is_logged_out();
        $data['login'] = true;
        $this->load->view('login', $data);
    }

    public function register()
    {
        $data['login'] = false;
        $this->load->view('login', $data);
    }

    public function check_login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $ceknim = $this->auth_m->check_nim($email);
        $ceknik = $this->auth_m->check_nik($email);
        if ($ceknim) {
            if (password_verify($password, $ceknim['password'])) {
                $data = [
                    'iduser' => $ceknim['iduser'],
                    'email' => $ceknim['email'],
                    'level' => $ceknim['level']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', 'Selamat Datang, ' . $ceknim['nama'] . '');
                redirect('dashboard/profil_saya');
            } else {
                $this->session->set_flashdata('error', 'Maaf, password anda salah');
            }
        } elseif ($ceknik) {
            if (password_verify($password, $ceknik['password'])) {
                $data = [
                    'iduser' => $ceknik['iduser'],
                    'email' => $ceknik['email'],
                    'level' => $ceknik['level']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', 'Selamat Datang, ' . $ceknik['nama'] . '');
                redirect('dashboard/profil_saya');
            } else {
                $this->session->set_flashdata('error', 'Maaf, password anda salah');
            }
        } else {
            $this->session->set_flashdata('error', 'Maaf, NIM / NIK anda belum terdaftar');
        }
        redirect('auth');
    }

    public function logout()
    {
        $id = __session('iduser');
        $this->session->sess_destroy($id);
        redirect('auth');
    }
}