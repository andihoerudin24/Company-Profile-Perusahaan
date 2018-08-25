<?php

Class Model_pendaftaran extends CI_Model {

    function edit() {
        $data = array(
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_telpon' => $this->input->post('no_telpon'),
            'gelar' => $this->input->post('gelar'),
            'nama_pt' => $this->input->post('nama_pt'),
            'id_sertifikat' => $this->input->post('id_sertifikat'),
        );
        $id_pendaftar = $this->input->post('id_pendaftar');
        $this->db->where('id_pendaftar', $id_pendaftar);
        $this->db->update('pendaftaran', $data);
    }

}

?>