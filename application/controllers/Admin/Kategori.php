<?php

class Kategori extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_kategori');
         chek_seesion();
    }

    function index() {
        if (isset($_POST['submit'])) {
            $this->Model_kategori->add();
            $this->session->set_flashdata('berhasil', 'sukses menambah data');
            redirect('Admin/Kategori');
        } else {
            $data['kategori'] = $this->db->get('kategori')->result();
            $this->template->load('template', 'admin/kategori/list', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_kategori->edit();
             $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/Kategori');
        } else {
            $this->template->load('template', 'admin/kategori/list');
        }
    }

    function Hapus() {
        $id= $this->uri->segment(4);
        $this->db->where('id_kategori',$id);
        $this->db->delete('kategori');
         $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Kategori');
    }

    function show_by_id() {
        $id_kategori = $_GET['id_kategori'];
        $sql_kategori = "select * from kategori where id_kategori='$id_kategori'";
        $kategori = $this->db->query($sql_kategori)->row_Array();
        $data = array(
            'id_kategori' => $kategori['id_kategori'],
            'nama_kategori' => $kategori['nama_kategori']
        );
        echo json_encode($data);
    }

}

?>