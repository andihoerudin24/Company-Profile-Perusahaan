<?php

class Layanan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_layanan');
         chek_seesion();
    }

    function index() {
        if (isset($_POST['submit'])) {
            $this->Model_layanan->add();
            $this->session->set_flashdata('berhasil', 'sukses menambah data');
            redirect('Admin/Layanan');
        } else {
            $data['service'] = $this->db->get('service')->result();
            $this->template->load('template', 'admin/layanan/list', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
             $this->Model_layanan->edit();
             $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/Layanan');
        } else {
            $this->template->load('template', 'admin/kategori/list');
        }
    }

    function Hapus() {
        $id= $this->uri->segment(4);
        $this->db->where('id_service',$id);
        $this->db->delete('service');
         $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Layanan');
    }

    function show_by_id() {
        $id_service = $_GET['id_service'];
        $sql_service = "select * from service where id_service='$id_service'";
        $service = $this->db->query($sql_service)->row_Array();
        $data = array(
            'id_service' => $service['id_service'],
            'nama_service' => $service['nama_service']
        );
        echo json_encode($data);
    }

}

?>