<?php

Class Model_kategori extends CI_Model {

    function add() {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );

        $this->db->insert('kategori', $data);
    }
    
    function edit() {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
         $id_kategori= $this->input->post('id_kategori');
        $this->db->where('id_kategori',$id_kategori);
        $this->db->update('kategori',$data);
    }

}

?>