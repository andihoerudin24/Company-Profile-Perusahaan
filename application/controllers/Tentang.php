<?php

Class Tentang extends CI_Controller {

    function index() {
        $data['tentang'] = $this->db->get('tentang')->result();
        $data['visi'] = $this->db->get('misi')->result();
        $data['team'] = $this->db->get('team')->result();
        $data['testimoni'] = $this->db->get('testimoni')->result();
         $this->load->view('tentang', $data);
    }

}

?>