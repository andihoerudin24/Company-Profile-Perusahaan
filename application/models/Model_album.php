<?php

Class Model_album extends CI_Model {

    function add() {
        $data = array(
            'nama_album' => $this->input->post('nama_album')
        );
          $this->db->insert('album',$data);
    }
    
    function edit() {
        $data = array(
            'nama_album' => $this->input->post('nama_album')
        );
        $id_album= $this->input->post('id_album');
        $this->db->where('id_album',$id_album);
        $this->db->update('album',$data);
    }

}

?>