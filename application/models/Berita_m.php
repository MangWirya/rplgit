<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita_m extends CI_Model
{

    private $table = 'berita';
    private $ID = 'idberita';

    public function getberita()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        return $this->db->get()->result_array();
    }

    public function getberitabyid($idberita)
    {
        return $this->db->get_where($this->table, ["idberita" => $idberita])->row();
    }

    public function tambah($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function hapus($id)
    {
        $this->db->delete($this->table, [$this->ID => $id]);
    }
}
