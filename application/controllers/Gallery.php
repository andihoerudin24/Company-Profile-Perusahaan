<?php

Class Gallery extends CI_Controller {

    function index() {
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album', 'album.id_album=gallery.id_album');
        $data['gallery'] = $this->db->get()->result();
        $data['album'] = $this->db->get('album')->result();
        $this->load->View('gallery', $data);
    }

    function cari() {
        $keyword = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('gallery');
        $this->db->join('album', 'album.id_album=gallery.id_album');
        $this->db->where('nama_album', $keyword);
        $data['gallery'] = $this->db->get()->result();
        $data['album'] = $this->db->get('album')->result();
        
        $this->load->View('gallery', $data);
    }

}

?>