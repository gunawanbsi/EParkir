<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['judul'] = 'Petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/header', $data);
        $this->load->view('user/index', $data);
        $this->load->view('footer');
    }
    public function lokasi()
    {
        $data['judul'] = 'Lokasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->ModelLokasi->cekData()->result();
        $this->load->view('user/header', $data);
        $this->load->view('user/lokasi', $data);
        $this->load->view('footer');
    }
    public function kendaraan($id)
    {
        $data['judul'] = 'Lokasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->ModelLokasi->detailLokasi($id);
        $this->load->view('user/header', $data);
        $this->load->view('user/kendaraan', $data);
        $this->load->view('footer');
    }
    public function prosesKendaraan()
    {
        $lokasi = $this->input->post('lokasi');
        $petugas = $this->input->post('petugas');
        $jenis_kendaraan = $this->input->post('jenis_kendaraan');
        $plat_kendaraan = $this->input->post('plat_kendaraan');
        $biaya = $this->input->post('biaya');

        $add = array (
            'lokasi' => $lokasi,
            'petugas' => $petugas,
            'jenis_kendaraan' => $jenis_kendaraan,
            'plat_kendaraan' => $plat_kendaraan,
            'biaya' => $biaya,
        );
        $this->ModelKendaraan->simpanData($add);
        redirect('user/lokasi');
    }
}