<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna_m extends CI_Model
{

    private $table = 'user';
    private $ID = 'iduser';

    public function getAll()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('level', 'User');
        return $this->db->get()->result_array();
    }

    public function getpengguna()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        if (__session('level') != 'admin') {
            $this->db->where('level <>', 'admin');
        }
        return $this->db->get()->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete($this->table, [$this->ID => $id]);
    }

    public function jumlahpenduduk($where)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where($where);
        $hasil = $this->db->get()->num_rows();
        return $hasil;
    }

    public function jumlahpengguna()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('level !=', 'user');
        $hasil = $this->db->get()->num_rows();
        return $hasil;
    }

}
