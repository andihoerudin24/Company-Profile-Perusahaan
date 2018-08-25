<?php

Class Visi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_visi');
         chek_seesion();
    }

    function index() {
        $data['visi'] = $this->db->get('misi')->result();
        $this->template->load('template', 'admin/visi/list', $data);
    }

    function show_by_id() {
        $id = $_GET['id'];
        $sql_misi = "select * from misi where id='$id'";
        $misi = $this->db->query($sql_misi)->row_Array();
        $data = array(
            'id' => $misi['id'],
            'misi' => $misi['misi'],
            'visi' => $misi['visi'],
        );
        echo json_encode($data);
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $misi = $this->input->post('misi');
            $this->Model_visi->edit($misi);
            $this->session->set_flashdata('edit', 'Sukses edit ');
            redirect('Admin/Visi');
        }
    }

}

?>