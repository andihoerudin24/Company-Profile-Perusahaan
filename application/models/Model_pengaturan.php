<?php

Class Model_pengaturan extends CI_Model {

    function add() {
        $data = array(
            'judul' => $this->input->post('judul'),
            'icon' => $this->input->post('icon'),
            'isi' => $this->input->post('isi')
        );
        $this->db->insert('pengaturan', $data);
    }

    function edit() {
        $data = array(
            'judul' => $this->input->post('judul'),
            'icon' => $this->input->post('icon'),
            'isi' => $this->input->post('isi')
        );
        $id_pengaturan = $this->input->post('id_pengaturan');
        $this->db->where('id_pengaturan', $id_pengaturan);
        $this->db->update('pengaturan', $data);
    }

}

?>