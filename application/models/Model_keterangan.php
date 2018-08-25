<?php

Class Model_keterangan extends CI_Model {

    function add() {
        $data = array(
            'judul' => $this->input->post('judul'),
            'keterangan' => $this->input->post('keterangan'),
          );
        $this->db->insert('keterangan_service', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'keterangan' => $this->input->post('keterangan'),
                'foto' => $foto,
            );
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'keterangan' => $this->input->post('keterangan'),
            );
        }
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->update('Keterangan_service', $data);
    }

}

?>