<?php

class Model_client extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('client');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('client');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {

        $data = array(
            'nama_client' => $this->input->post('nama_client'),
            'logo' => $foto
        );
        $this->db->insert('client', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'logo' => $foto,
                'nama_client' => $this->input->post('nama_client')
            );

            $id_client = $this->input->post('id_client');
            $this->db->where('id_client', $id_client);
            $this->db->update('client', $data);
        } else {
            $data = array(
                'nama_client' => $this->input->post('nama_client')
            );

            $id_client = $this->input->post('id_client');
            $this->db->where('id_client', $id_client);
            $this->db->update('client', $data);
        }
    }

}

?>