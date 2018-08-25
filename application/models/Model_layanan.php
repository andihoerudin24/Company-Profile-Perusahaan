<?php

Class Model_layanan extends CI_Model {

    function add() {
        $data = array(
            'nama_service' => $this->input->post('nama_service')
        );

        $this->db->insert('service', $data);
    }
    
    function edit() {
        $data = array(
            'nama_service' => $this->input->post('nama_service')
        );
         $id_service= $this->input->post('id_service');
        $this->db->where('id_service',$id_service);
        $this->db->update('service',$data);
    }

}

?>