<?php

Class Model_artikel extends CI_Model {

    function add($foto) {
        $data = array(
            'judul' => $this->input->post('judul'),
            'id_kategori' => $this->input->post('id_kategori'),
            'foto' => $foto,
            'isi_artikel' => $this->input->post('isi_artikel')
        );
        $this->db->insert('artikel', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'judul' => $this->input->post('judul'),
                'id_kategori' => $this->input->post('id_kategori'),
                'isi_artikel' => $this->input->post('isi_artikel'),
                'foto' => $foto,
            );
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'id_kategori' => $this->input->post('id_kategori'),
                'isi_artikel' => $this->input->post('isi_artikel')
            );
        }
        $id_artikel = $this->input->post('id_artikel');
        $this->db->where('id_artikel', $id_artikel);
        $this->db->update('artikel', $data);
    }
    
    function br() {
        $this->db->select('*');
        $this->db->from('v_artikel');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('v_artikel');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

}

?>