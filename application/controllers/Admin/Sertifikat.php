<?php

Class Sertifikat extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_sertifikat');
         chek_seesion();
    }

    function index() {
        if (isset($_POST['submit'])) {
            $this->Model_sertifikat->add();
            $this->session->set_flashdata('berhasil', 'sukses menambah data');
            redirect('Admin/Sertifikat');
        } else {
            $data['sertifikat'] = $this->db->get('sertifikat')->result();
            $this->template->load('template', 'admin/sertifikat/list', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_sertifikat->edit();
            $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/Sertifikat');
        } else {
            $this->template->load('template', 'admin/kategori/list');
        }
    }

    function Hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id_sertifikat', $id);
        $this->db->delete('sertifikat');
        $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/sertifikat');
    }

    function show_by_id() {
        $id_sertifikat = $_GET['id_sertifikat'];
        $sql_sertifikat = "select * from sertifikat where id_sertifikat='$id_sertifikat'";
        $sertifikat = $this->db->query($sql_sertifikat)->row_Array();
        $data = array(
            'id_sertifikat'   => $sertifikat['id_sertifikat'],
            'nama_sertifikat' => $sertifikat['nama_sertifikat']
        );
        echo json_encode($data);
    }

}

?>