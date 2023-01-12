<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_home');
    }

    public function index()
    {
        // $data = array(

        //         'galeri' => $this->m_home->home_galeri(),
        //         'isi'   => 'v_home'
        // );
        $this->load->view('v_home');
    }
    // public function galeri()
    // {
        
    //     $data = array(
    //             'title' => 'Galeri Foto',
    //             'galeri'=> $this->m_home->galeri(),
    //             'isi'   => 'v_home'
    //             );
    // $this->load->view('v_home');
    // }
}