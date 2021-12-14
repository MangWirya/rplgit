<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('pengajuan_m');
    }

    public function index()
    {
        $data['pengajuan_surat'] = true;
        if ($this->session->userdata('level') == "user") {
            $data['pengajuan_all'] = $this->pengajuan_m->get_where(array('iduser' => $this->session->userdata('iduser')), 'suratkerjapraktek');
        } else {
            $data['pengajuan_all'] = $this->pengajuan_m->get_where(array(), 'suratkerjapraktek');
        }
        $data['content'] = 'pengajuan';
        $this->load->view('index', $data);
    }

    public function suratkerjapraktektambah()
    {
        $this->form_validation->set_rules('iduser', 'Id User', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            if ($this->session->userdata('level') == "user") {
                $data = [
                    'iduser' => $this->session->userdata('iduser'),
                    'tujuansurat' => $this->input->post('tujuansurat', true),
                    'namamitra' => $this->input->post('namamitra', true),
                    'alamatmitra' => $this->input->post('alamatmitra', true),
                    'keterangan' => $this->input->post('keterangan', true),
                    'tanggal' => $this->input->post('tanggal', true),
                    'nim1' => $this->input->post('nim1', true),
                    'nama1' => $this->input->post('nama1', true),
                    'nim2' => $this->input->post('nim2', true),
                    'nama2' => $this->input->post('nama2', true),
                    'nim3' => $this->input->post('nim3', true),
                    'nama3' => $this->input->post('nama3', true),
                    'nim4' => $this->input->post('nim4', true),
                    'nama4' => $this->input->post('nama4', true),
                    'status' => 'Menunggu Persetujuan',
                ];
            } else {
                $data = [
                    'iduser' => $this->session->userdata('iduser'),
                    'tujuansurat' => $this->input->post('tujuansurat', true),
                    'namamitra' => $this->input->post('namamitra', true),
                    'alamatmitra' => $this->input->post('alamatmitra', true),
                    'keterangan' => $this->input->post('keterangan', true),
                    'tanggal' => $this->input->post('tanggal', true),
                    'nim1' => $this->input->post('nim1', true),
                    'nama1' => $this->input->post('nama1', true),
                    'nim2' => $this->input->post('nim2', true),
                    'nama2' => $this->input->post('nama2', true),
                    'nim3' => $this->input->post('nim3', true),
                    'nama3' => $this->input->post('nama3', true),
                    'nim4' => $this->input->post('nim4', true),
                    'nama4' => $this->input->post('nama4', true),
                    'ttd' => $this->input->post('ttd', true),
                    'status' => 'Di Setujui',
                ];
            }
            $this->db->insert('suratkerjapraktek', $data);
            $this->session->set_flashdata('success', 'Permohonan anda berhasil di ajukan, mohon ditunggu');
            redirect('pengajuan');
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'suratkerjapraktektambah';
        $this->load->view('index', $data);
    }

    public function suratkerjapraktekedit($id)
    {
        $this->form_validation->set_rules('idsuratkerjapraktek', 'ID Surat Kerja Praktek', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'tujuansurat' => $this->input->post('tujuansurat', true),
                'namamitra' => $this->input->post('namamitra', true),
                'alamatmitra' => $this->input->post('alamatmitra', true),
                'keterangan' => $this->input->post('keterangan', true),
                'tanggal' => $this->input->post('tanggal', true),
                'nim1' => $this->input->post('nim1', true),
                'nama1' => $this->input->post('nama1', true),
                'nim2' => $this->input->post('nim2', true),
                'nama2' => $this->input->post('nama2', true),
                'nim3' => $this->input->post('nim3', true),
                'nama3' => $this->input->post('nama3', true),
                'nim4' => $this->input->post('nim4', true),
                'nama4' => $this->input->post('nama4', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratkerjapraktek', $id);
            $this->db->update('suratkerjapraktek');
            $this->session->set_flashdata('success', 'Permohonan berhasil di edit');
            redirect('pengajuan');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratkerjapraktek'     => $id,
            ),
            'suratkerjapraktek'
        );
        $data['content'] = 'suratkerjapraktekedit';
        $this->load->view('index', $data);
    }

    public function suratkerjapraktekhapus($id)
    {
        $this->pengajuan_m->hapus(
            array(
                'idsuratkerjapraktek'     => $id,
            ),
            'suratkerjapraktek'
        );
        $this->session->set_flashdata('success', 'Surat Permohonan berhasil di hapus');
        redirect('pengajuan/');
    }

    public function suratkerjapraktekverifikasi($id)
    {
        $this->form_validation->set_rules('idsuratkerjapraktek', 'ID Surat Kerja Praktek', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run()) {
            $data = [
                'status' => $this->input->post('status', true),
                'ttd' => $this->input->post('ttd', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratkerjapraktek', $id);
            $this->db->update('suratkerjapraktek');
            $this->session->set_flashdata('success', 'Permohonan berhasil di verifikasi');
            redirect('pengajuan');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratkerjapraktek'     => $id,
            ),
            'suratkerjapraktek'
        );
        $data['content'] = 'suratkerjapraktekverifikasi';
        $this->load->view('index', $data);
    }

    public function suratkerjapraktekcetak($id)
    {
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratkerjapraktek'     => $id,
            ),
            'suratkerjapraktek'
        );
        $this->load->view('suratkerjapraktekcetak', $data);
    }

    public function suratberitaacara()
    {
        $data['pengajuan_surat'] = true;
        if ($this->session->userdata('level') == "user") {
            $data['pengajuan_all'] = $this->pengajuan_m->get_where(array('iduser' => $this->session->userdata('iduser')), 'suratberitaacara');
        } else {
            $data['pengajuan_all'] = $this->pengajuan_m->get_where(array(), 'suratberitaacara');
        }
        $data['content'] = 'suratberitaacara';
        $this->load->view('index', $data);
    }

    public function suratberitaacaratambah()
    {
        $this->form_validation->set_rules('iduser', 'Id User', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'iduser' => $this->session->userdata('iduser'),
                'judul' => $this->input->post('judul', true),
                'namamitra' => $this->input->post('namamitra', true),
                'namaperwakilanmitra' => $this->input->post('namaperwakilanmitra', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'tanggal' => $this->input->post('tanggal', true),
                'ttd' => $this->input->post('ttd', true),
                'status' => 'Di Setujui',
            ];
            $this->db->insert('suratberitaacara', $data);
            $this->session->set_flashdata('success', 'Surat Berita Acara Berhasil Di Tambah');
            redirect('pengajuan/suratberitaacara');
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'suratberitaacaratambah';
        $this->load->view('index', $data);
    }

    public function suratberitaacaraedit($id)
    {
        $this->form_validation->set_rules('idsuratberitaacara', 'ID Surat Kerja Praktek', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'judul' => $this->input->post('judul', true),
                'namamitra' => $this->input->post('namamitra', true),
                'namaperwakilanmitra' => $this->input->post('namaperwakilanmitra', true),
                'deskripsi' => $this->input->post('deskripsi', true),
                'tanggal' => $this->input->post('tanggal', true),
                'ttd' => $this->input->post('ttd', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratberitaacara', $id);
            $this->db->update('suratberitaacara');
            $this->session->set_flashdata('success', 'Permohonan berhasil di edit');
            redirect('pengajuan/suratberitaacara');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratberitaacara'     => $id,
            ),
            'suratberitaacara'
        );
        $data['content'] = 'suratberitaacaraedit';
        $this->load->view('index', $data);
    }

    public function suratberitaacarahapus($id)
    {
        $this->pengajuan_m->hapus(
            array(
                'idsuratberitaacara'     => $id,
            ),
            'suratberitaacara'
        );
        $this->session->set_flashdata('success', 'Surat Berita Acara berhasil di hapus');
        redirect('pengajuan/suratberitaacara');
    }

    public function suratberitaacaraverifikasi($id)
    {
        $this->form_validation->set_rules('idsuratberitaacara', 'ID Surat Berita Acara', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run()) {
            $data = [
                'status' => $this->input->post('status', true),
                'ttd' => $this->input->post('ttd', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratberitaacara', $id);
            $this->db->update('suratberitaacara');
            $this->session->set_flashdata('success', 'Permohonan berhasil di verifikasi');
            redirect('pengajuan/suratberitaacara');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratberitaacara'     => $id,
            ),
            'suratberitaacara'
        );
        $data['content'] = 'suratberitaacaraverifikasi';
        $this->load->view('index', $data);
    }

    public function suratberitaacaracetak($id)
    {
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratberitaacara'     => $id,
            ),
            'suratberitaacara'
        );
        $this->load->view('suratberitaacaracetak', $data);
    }

    public function suratizinkegiatan()
    {
        $data['pengajuan_surat'] = true;
        if ($this->session->userdata('level') == "user") {
            $data['pengajuan_all'] = $this->pengajuan_m->get_where(array('iduser' => $this->session->userdata('iduser')), 'suratizinkegiatan');
        } else {
            $data['pengajuan_all'] = $this->pengajuan_m->get_where(array(), 'suratizinkegiatan');
        }
        $data['content'] = 'suratizinkegiatan';
        $this->load->view('index', $data);
    }

    public function suratizinkegiatantambah()
    {
        $this->form_validation->set_rules('iduser', 'Id User', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'iduser' => $this->session->userdata('iduser'),
                'judulkegiatan' => $this->input->post('judulkegiatan', true),
                'penyelenggarakegiatan' => $this->input->post('penyelenggarakegiatan', true),
                'alasanizin' => $this->input->post('alasanizin', true),
                'tanggal' => $this->input->post('tanggal', true),
                'tanggalmulai' => $this->input->post('tanggalmulai', true),
                'tanggalselesai' => $this->input->post('tanggalselesai', true),
                'status' => 'Menunggu Persetujuan',
            ];
            $this->db->insert('suratizinkegiatan', $data);
            $this->session->set_flashdata('success', 'Surat Izin Kegiatan Berhasil Di Tambah, Mohon Di Tunggu');
            redirect('pengajuan/suratizinkegiatan');
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'suratizinkegiatantambah';
        $this->load->view('index', $data);
    }

    public function suratizinkegiatanedit($id)
    {
        $this->form_validation->set_rules('idsuratizinkegiatan', 'ID Surat Kerja Praktek', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'judulkegiatan' => $this->input->post('judulkegiatan', true),
                'penyelenggarakegiatan' => $this->input->post('penyelenggarakegiatan', true),
                'alasanizin' => $this->input->post('alasanizin', true),
                'tanggal' => $this->input->post('tanggal', true),
                'tanggalmulai' => $this->input->post('tanggalmulai', true),
                'tanggalselesai' => $this->input->post('tanggalselesai', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratizinkegiatan', $id);
            $this->db->update('suratizinkegiatan');
            $this->session->set_flashdata('success', 'Permohonan berhasil di edit');
            redirect('pengajuan/suratizinkegiatan');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratizinkegiatan'     => $id,
            ),
            'suratizinkegiatan'
        );
        $data['content'] = 'suratizinkegiatanedit';
        $this->load->view('index', $data);
    }

    public function suratizinkegiatanhapus($id)
    {
        $this->pengajuan_m->hapus(
            array(
                'idsuratizinkegiatan'     => $id,
            ),
            'suratizinkegiatan'
        );
        $this->session->set_flashdata('success', 'Surat Izin Kegiatan berhasil di hapus');
        redirect('pengajuan/suratizinkegiatan');
    }

    public function suratizinkegiatanverifikasi($id)
    {
        $this->form_validation->set_rules('idsuratizinkegiatan', 'ID Surat Izin Kegiatan', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run()) {
            $data = [
                'status' => $this->input->post('status', true),
                'ttd' => $this->input->post('ttd', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratizinkegiatan', $id);
            $this->db->update('suratizinkegiatan');
            $this->session->set_flashdata('success', 'Permohonan berhasil di verifikasi');
            redirect('pengajuan/suratizinkegiatan');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratizinkegiatan'     => $id,
            ),
            'suratizinkegiatan'
        );
        $data['content'] = 'suratizinkegiatanverifikasi';
        $this->load->view('index', $data);
    }

    public function suratizinkegiatancetak($id)
    {
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratizinkegiatan'     => $id,
            ),
            'suratizinkegiatan'
        );
        $this->load->view('suratizinkegiatancetak', $data);
    }

    public function suratpengumuman()
    {
        $data['pengajuan_surat'] = true;
        $data['pengajuan_all'] = $this->pengajuan_m->get_where(array(), 'suratpengumuman');
        $data['content'] = 'suratpengumuman';
        $this->load->view('index', $data);
    }

    public function suratpengumumantambah()
    {
        $this->form_validation->set_rules('iduser', 'Id User', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'iduser' => $this->session->userdata('iduser'),
                'judulpengumuman' => $this->input->post('judulpengumuman', true),
                'isipengumuman' => $this->input->post('isipengumuman', true),
                'tanggal' => $this->input->post('tanggal', true),
                'ttd' => $this->input->post('ttd', true),
                'status' => 'Di Setujui',
            ];
            $this->db->insert('suratpengumuman', $data);
            $this->session->set_flashdata('success', 'Pengumuman Berhasil Di Tambah');
            redirect('pengajuan/suratpengumuman');
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'suratpengumumantambah';
        $this->load->view('index', $data);
    }

    public function suratpengumumanedit($id)
    {
        $this->form_validation->set_rules('idsuratpengumuman', 'ID Surat Kerja Praktek', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'judulpengumuman' => $this->input->post('judulpengumuman', true),
                'isipengumuman' => $this->input->post('isipengumuman', true),
                'ttd' => $this->input->post('ttd', true),
                'tanggal' => $this->input->post('tanggal', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratpengumuman', $id);
            $this->db->update('suratpengumuman');
            $this->session->set_flashdata('success', 'Pengumuman berhasil di edit');
            redirect('pengajuan/suratpengumuman');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratpengumuman'     => $id,
            ),
            'suratpengumuman'
        );
        $data['content'] = 'suratpengumumanedit';
        $this->load->view('index', $data);
    }

    public function suratpengumumanhapus($id)
    {
        $this->pengajuan_m->hapus(
            array(
                'idsuratpengumuman'     => $id,
            ),
            'suratpengumuman'
        );
        $this->session->set_flashdata('success', 'Pengumuman berhasil di hapus');
        redirect('pengajuan/suratpengumuman');
    }

    public function suratpengumumancetak($id)
    {
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratpengumuman'     => $id,
            ),
            'suratpengumuman'
        );
        $this->load->view('suratpengumumancetak', $data);
    }

    public function suratupload()
    {
        $data['pengajuan_surat'] = true;
        $data['pengajuan_all'] = $this->pengajuan_m->get_where(array(), 'suratupload');
        $data['content'] = 'suratupload';
        $this->load->view('index', $data);
    }

    public function suratuploadtambah()
    {
        $this->form_validation->set_rules('iduser', 'Id User', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'iduser' => $this->session->userdata('iduser'),
                'judul' => $this->input->post('judul', true),
                'tanggal' => $this->input->post('tanggal', true),
                'status' => 'Menunggu Persetujuan',
            ];
            if (!empty($_FILES)) {
                $config['upload_path']          = getcwd() . '/upload/suratupload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx';
                $config['max_size']             = 5024;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $dataku = array('upload_data' => $this->upload->data());
                    $data['file'] = $dataku['upload_data']['file_name'];
                }
            }
            $this->db->insert('suratupload', $data);
            $this->session->set_flashdata('success', 'Surat Berhasil Di Tambah');
            redirect('pengajuan/suratupload');
        }
        $data['profil'] = $this->auth_m->getme($this->session->userdata('iduser'));
        $data['content'] = 'suratuploadtambah';
        $this->load->view('index', $data);
    }

    public function suratuploadedit($id)
    {
        $this->form_validation->set_rules('idsuratupload', 'ID Surat Kerja Praktek', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if ($this->form_validation->run()) {
            $data = [
                'judul' => $this->input->post('judul', true),
                'tanggal' => $this->input->post('tanggal', true),
            ];
            if (!empty($_FILES)) {
                $config['upload_path']          = getcwd() . '/upload/suratupload/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|doc|docx';
                $config['max_size']             = 5024;
                $config['encrypt_name']         = true;
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    $dataku = array('upload_data' => $this->upload->data());
                    $data['file'] = $dataku['upload_data']['file_name'];
                }
            }
            $this->db->set($data);
            $this->db->where('idsuratupload', $id);
            $this->db->update('suratupload');
            $this->session->set_flashdata('success', 'Surat berhasil di edit');
            redirect('pengajuan/suratupload');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratupload'     => $id,
            ),
            'suratupload'
        );
        $data['content'] = 'suratuploadedit';
        $this->load->view('index', $data);
    }

    public function suratuploadhapus($id)
    {
        $this->pengajuan_m->hapus(
            array(
                'idsuratupload'     => $id,
            ),
            'suratupload'
        );
        $this->session->set_flashdata('success', 'Surat berhasil di hapus');
        redirect('pengajuan/suratupload');
    }

    public function suratuploadverifikasi($id)
    {
        $this->form_validation->set_rules('idsuratupload', 'ID Surat Izin Kegiatan', 'required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        if ($this->form_validation->run()) {
            $data = [
                'status' => $this->input->post('status', true),
            ];
            $this->db->set($data);
            $this->db->where('idsuratupload', $id);
            $this->db->update('suratupload');
            $this->session->set_flashdata('success', 'Surat berhasil di verifikasi');
            redirect('pengajuan/suratupload');
        }
        $data['surat'] = $this->pengajuan_m->getbyid(
            array(
                'idsuratupload'     => $id,
            ),
            'suratupload'
        );
        $data['content'] = 'suratuploadverifikasi';
        $this->load->view('index', $data);
    }


}
