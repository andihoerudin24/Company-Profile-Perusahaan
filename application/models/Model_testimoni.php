<?php

Class Model_testimoni extends CI_Model {

    function add() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'isi_testi' => $this->input->post('isi_testi')
        );

        $this->db->insert('testimoni', $data);
    }

    function edit() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'isi_testi' => $this->input->post('isi_testi')
        );
        $id_moni = $this->input->post('id_moni');
        $this->db->where('id_moni', $id_moni);
        $this->db->update('testimoni', $data);
    }

}

?>