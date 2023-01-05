<?php

class M_penyunting Extends CI_Model{
    
    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('penyunting');
        $this->db->where('id_penyunting', $id);
        return $this->db->get()->row_array();
    }

    public function update($id_penyunting, $data)
    {
        $this->db->where('id_penyunting', $id_penyunting);
        $this->db->update('penyunting', $data);
    }
    
    public function hapus($id)
    {
        $this->db->where('id_penyunting', $id);
        $this->db->delete('penyunting');
    }
}