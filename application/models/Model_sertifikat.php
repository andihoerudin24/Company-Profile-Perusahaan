<?php

Class Model_sertifikat extends CI_Model {

    function add() {
        $data = array(
            'nama_sertifikat' => $this->input->post('nama_sertifikat')
        );

        $this->db->insert('sertifikat', $data);
    }
    
    function edit() {
        $data = array(
            'nama_sertifikat' => $this->input->post('nama_sertifikat')
        );
        $id_sertifikat= $this->input->post('id_sertifikat');
        $this->db->where('id_sertifikat',$id_sertifikat);
        $this->db->update('sertifikat',$data);
    }

}

?>