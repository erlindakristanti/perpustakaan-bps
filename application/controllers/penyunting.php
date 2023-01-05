<?php

class Penyunting Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penyunting');
    }

    public function index()
    {
        $isi['content'] = 'penyunting/v_penyunting';
        $isi['data']     = $this->db->get('penyunting')->result();
        $this->load->view('v_dashboard', $isi);
    }
    public function tambah_penyunting()
    {
        $isi['content'] = 'penyunting/t_penyunting';
        $this->load->view('v_dashboard', $isi);
    }
    public function simpan()
    {
        $data = array(
            'id_penyunting'    => $this-> input->post('id_penyunting'),
            'nama_penyunting'  => $this-> input->post('nama_penyunting')
        );
        $query = $this->db->insert('penyunting', $data);
        if ($query = true){
            $this->session->set_flashdata('info', 'Data Berhasil di Simpan!');
            redirect('penyunting');
        }
    }
    public function edit($id)
    {
        $isi['content'] = 'penyunting/e_penyunting';
        $isi['data'] = $this->m_penyunting->edit($id);
        $this->load->view('v_dashboard', $isi);
    }
    public function update()
    {
        $id_penyunting = $this->input->post('id_penyunting');

        $data = array(
            'id_penyunting' => $this->input->post('id_penyunting'),
            'nama_penyunting' => $this->input->post('nama_penyunting')

        );
        $query = $this->m_penyunting->update($id_penyunting, $data);
        if($query = true){
            $this->session->set_flashdata('info', 'Data Penyunting Berhasil Diupdate');
            redirect('penyunting');
        }
    }
    public function hapus($id)
    {
        $query = $this->m_penyunting->hapus($id);
        if ($query = true){
            $this->session->set_flashdata('info','Data Penyunting Berhasil Dihapus!');
            redirect('penyunting','refresh');
        }
    }
}