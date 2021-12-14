<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model {

    private $table = 'user';
    private $ID = 'iduser';

    public function check_nim($nim){
        return $this->db->get_where($this->table,['nim'=>$nim])->row_array();
    }

    public function check_nik($nik){
        return $this->db->get_where($this->table,['nik'=>$nik])->row_array();
    }
    
    public function tambah($data){
        $this->db->insert($this->table,$data);
        return $this->db->insert_id();
    }

    public function addProfil($data){
        $this->db->insert('user',$data);
    }

    public function getme($id)
    {
        return $this->db->get_where($this->table, ["iduser" => $id])->row();
    }

    public function updateProfil($data,$id){
        $this->db->update('user',$data,['iduser'=>$id]);
    }

    public function updatePass($data,$id){
        $this->db->update($this->table,$data,[$this->ID=>$id]);
    }
}

/* End of file Auth_m.php */