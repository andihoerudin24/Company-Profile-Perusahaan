<?php

class Model_gallery extends CI_Model {

    function br() {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album', 'album.id_album=gallery.id_album');
        $query = $this->db->get();
        return $query;
    }

    function join_br($limit, $start) {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album', 'album.id_album=gallery.id_album');
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query;
    }

    function add($foto) {
        $data = array(
            'nama_foto' => $this->input->post('nama_foto'),
            'id_album' => $this->input->post('id_album'),
            'foto' => $foto
        );
        $this->db->insert('gallery', $data);
    }

    function edit($foto) {
        if (!empty($foto)) {
            $data = array(
                'nama_foto' => $this->input->post('nama_foto'),
                'id_album' => $this->input->post('id_album'),
                'foto' => $foto
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('gallery', $data);
        }else{
            $data = array(
                'nama_foto' => $this->input->post('nama_foto'),
                'id_album' => $this->input->post('id_album'),
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('gallery', $data);
     
        }
    }

}

?>