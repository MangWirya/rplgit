<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan_m extends CI_Model
{

    public function format_tanggal($tgl) {
        $y    = date('Y', strtotime($tgl));
        $d    = date('d', strtotime($tgl));
        $dt_m = date('m', strtotime($tgl));
        $m    = $this->month($dt_m);
            $date = $d.' '.$m.' '.$y;
        return $date;
      }
    
      public function month($dt) {
            $array = array(
                '01'=>'Januari',
                '02'=>'Febuari',
                '03'=>'Maret',
                '04'=>'April',
                '05'=>'Mei',
                '06'=>'Juni',
                '07'=>'Juli',
                '08'=>'Agustus',
                '09'=>'September',
                '10'=>'Oktober',
                '11'=>'November',
                '12'=>'Desember',
            );
            return $array[$dt];
        }

    public function get_where($where = array(), $table)
    {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->result_array();
    }

    public function getbyid($where = array(), $table)
    {
        $this->db->from($table);
        $this->db->where($where);
        return $this->db->get()->row();
    }

    public function getsurat($where = array(), $table)
    {
        $this->db->from($table);
        $this->db->where($where);
        if ($this->session->userdata('level') == "user") {
            $this->db->where('iduser', $this->session->userdata('iduser'));
        }
        return $this->db->get()->result_array();
    }

    public function hapus($where = array(), $table)
    {
        $this->db->delete($table, $where);
    }

    public function uploadBerkas($data)
    {
        $this->db->insert('berkas', $data);
    }

    public function jumlahpermohonan($where)
    {
        $this->db->select('*');
        $this->db->from('surattugas');
        $this->db->where($where);
        $a = $this->db->get()->num_rows();
        $this->db->select('*');
        $this->db->from('suratizinkegiatan');
        $this->db->where($where);
        $b = $this->db->get()->num_rows();
        $this->db->select('*');
        $this->db->from('suratkerjapraktek');
        $this->db->where($where);
        $c = $this->db->get()->num_rows();
        $hasil = $a + $b + $c;
        return $hasil;
    }

}
