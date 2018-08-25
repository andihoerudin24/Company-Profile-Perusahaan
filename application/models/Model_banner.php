<?php

class Model_banner extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('banner');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        if ($foto == 0) {
            $this->session->set_flashdata('gagal', 'gagal menambah banner, banner Tidak Boleh Kosong !!!!');

            redirect('Admin/Banner');
        } else {

            $data = array(
                'nama_banner' => $this->input->post('nama_banner'),
                'foto' => $foto
            );
            $this->db->insert('banner', $data);
        }
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'foto' => $foto,
                'nama_banner' => $this->input->post('nama_banner')
            );

            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('banner', $data);
        } else {
            $data = array(
                'nama_banner' => $this->input->post('nama_banner')
            );

            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('banner', $data);
        }
    }

}

?>