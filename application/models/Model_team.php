<?php

class Model_team extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('team');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('team');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        $data = array(
            'nama'  => $this->input->post('nama'),
            'bagian' => $this->input->post('bagian'),
            'foto'   => $foto
        );
        $this->db->insert('team', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama' => $this->input->post('nama'),
                'bagian' => $this->input->post('bagian'),
                'foto' => $foto
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('team', $data);
        }else{
            $data = array(
                'nama' => $this->input->post('nama'),
                'bagian' => $this->input->post('bagian'),
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('team', $data);
     
        }
    }

}

?>