<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    
    public function index()
    {
        $data['dashboard'] = true;
        $data['content'] = 'dashboard';
        $this->load->view('index',$data);
    }

    public function profil_saya(){
        $data['profil_saya'] = true;
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'profil';
        $this->load->view('index',$data);
    }

    public function update_profil(){
        $data = [
            'nik'=>$this->input->post('nik',true),
            'nama'=>$this->input->post('nama',true),
            'tempatlahir'=>$this->input->post('tempatlahir',true),
            'tanggallahir'=>$this->input->post('tanggallahir',true),
            'jeniskelamin'=>$this->input->post('jeniskelamin',true),
            'agama'=>$this->input->post('agama',true),
            'alamat'=>$this->input->post('alamat',true),
            'pekerjaan'=>$this->input->post('pekerjaan',true),
            'notlp'=>$this->input->post('notlp',true)
        ];
        $this->auth_m->updateProfil($data,$this->input->post('iduser',true));
        $password = $this->input->post('password',true);
        if($password!=""){
            $data = [
                'password'=>password_hash($password,PASSWORD_DEFAULT)
            ];
            $this->auth_m->updatePass($data,$this->input->post('iduser',true));
        }
        $this->session->set_flashdata('success','Anda telah berhasil mengubah data profil');
        redirect('dashboard/profil_saya');
    }

}

/* End of file Dashboard.php */