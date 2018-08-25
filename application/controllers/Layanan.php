<?php

Class Layanan extends CI_Controller {

    function index() {
        $this->db->select('*');
        $this->db->from('keterangan_service');
        $data['keterangan'] = $this->db->get()->result_Array();
        $this->db->select('*');
        $this->db->from('keterangan_service');
        $data['keter'] = $this->db->get()->row_Array();
        $data['service'] = $this->db->get('service')->result();
        $this->db->select('*');
        $this->db->from('pengaturan');
        $data['pengaturan'] = $this->db->get()->result();
        $this->db->select('*');
        $this->db->from('client');
        $data['client'] = $this->db->get()->result();
        $this->load->view('layanan', $data);
    }

}

?>