<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{

    function __construct(){
        parent :: __construct();
    }

    public function index(){
        $data['judul'] = "Beranda";
        $this->load->view('header', $data);
        $this->load->view('home', $data);
        $this->load->view('footer', $data);
    }
    public function berita(){
        $data['judul'] = "Berita";
        $this->load->view('header', $data);
        $this->load->view('berita', $data);
        $this->load->view('footer', $data);
    }
    public function about(){
        $data['judul'] = "Tentang Kami";
        $this->load->view('header', $data);
        $this->load->view('about', $data);
        $this->load->view('footer', $data);
    }
    public function contact(){
        $data['judul'] = "Contact";
        $this->load->view('header', $data);
        $this->load->view('contact', $data);
        $this->load->view('footer', $data);
    }
}