<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->ModelUser->getUserLimit()->result_array();
        $data['kendaraan'] = $this->ModelKendaraan->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }
    public function profile()
    {
        $data['judul'] = 'Profile Saya';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('admin/footer');
    }

    public function ubahProfile()
    {
        $data['judul'] = 'Ubah Profil';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required|trim', ['required' => 'Nama tidak Boleh Kosong']);

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/header', $data);
            $this->load->view('admin/sidebar', $data);
            $this->load->view('admin/topbar', $data);
            $this->load->view('admin/ubahprofile', $data);
            $this->load->view('admin/footer');
            }
            else {
                $nama = $this->input->post('nama', true);
                $email = $this->input->post('email', true);
                //jika ada gambar yang akan diupload
                $upload_image = $_FILES['image']['name'];

                if ($upload_image) {
                    $config['upload_path'] = './assets/img/profile/';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '300000';
                    $config['max_width'] = '10024';
                    $config['max_height'] = '10000';
                    $config['file_name'] = 'pro' . time();
                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('image')) {$gambar_lama = $data['user']['image'];
                        if ($gambar_lama != 'default.jpg') {unlink(FCPATH . 'assets/img/profile/' . $gambar_lama);
                        }       
                        $gambar_baru = $this->upload->data('file_name');
                        $this->db->set('image', $gambar_baru);
                    } 
                    else { }
                }

            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('user');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
            redirect('admin/profile');
        }
    }
    public function petugas()
    {
        $data['judul'] = 'Data Petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['petugas'] = $this->ModelUser->cekData(['role_id' => (2)])->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/datapetugas', $data);
        $this->load->view('admin/footer');
    }
    public function createPetugas(){
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = [
            'nama' => $nama,
            'email' => $email,
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'tanggal_input' => time()
        ];
        $this->ModelUser->simpanData($data, 'user');
        redirect('admin/petugas');
    }
    public function editPetugas($id)
    {
        $data['judul'] = 'Edit Data Petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['petugas'] = $this->ModelUser->getUserWhere($where, 'user')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/editpetugas', $data);
        $this->load->view('admin/footer', $data);
    }
    public function ubahPetugas()
    {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = [
            'nama' => $nama,
            'email' => $email,
    
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelUser->updateUser($where, $data, 'user');
        redirect('admin/petugas');
    }
    public function hapusPetugas($id)
    {
        $where = array('id' => $id);
        $this->ModelUser->hapusUser($where, 'user');
        redirect('admin/petugas');
    }
    public function lokasi()
    {
        $data['judul'] = 'Data Lokasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['lokasi'] = $this->ModelLokasi->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/datalokasi', $data);
        $this->load->view('admin/footer');
    }
    public function createLokasi(){
        $lokasi = $this->input->post('lokasi');
        $kapasitas = $this->input->post('kapasitas');

        $data = [
            'lokasi' => $lokasi,
            'kapasitas' => $kapasitas
            
        ];
        $this->ModelLokasi->simpanData($data, 'lokasi');
        redirect('admin/lokasi');
    }
    public function editLokasi($id)
    {
        $data['judul'] = 'Edit Data Lokasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['lokasi'] = $this->ModelLokasi->getLokasiWhere($where, 'lokasi')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/editlokasi', $data);
        $this->load->view('admin/footer', $data);
    }
    public function ubahLokasi()
    {
        $id = $this->input->post('id');
        $lokasi = $this->input->post('lokasi');
        $kapasitas = $this->input->post('kapasitas');

        $data = [
            'lokasi' => $lokasi,
            'kapasitas' => $kapasitas,
    
        ];
        $where = [
            'id' => $id
        ];
        $this->ModelLokasi->updateLokasi($where, $data, 'lokasi');
        redirect('admin/lokasi');
    }
    public function hapusLokasi($id)
    {
        $where = array('id' => $id);
        $this->ModelUser->hapusUser($where, 'lokasi');
        redirect('admin/lokasi');
    }
    public function kendaraan()
    {
        $data['judul'] = 'Data Lokasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['kendaraan'] = $this->ModelKendaraan->cekData()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/sidebar', $data);
        $this->load->view('admin/topbar', $data);
        $this->load->view('admin/datakendaraan', $data);
        $this->load->view('admin/footer');
    }
   
}