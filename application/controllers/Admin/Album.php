<?php

class Album extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_album');
        chek_seesion();
    }

    function index() {
        if (isset($_POST['submit'])) {
            $this->Model_album->add();
            $this->session->set_flashdata('berhasil', 'sukses menambah data');
            redirect('Admin/Album');
        } else {
            $data['album'] = $this->db->get('album')->result();
            $this->template->load('template', 'admin/album/list', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
             $this->Model_album->edit();
             $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/album');
        } else {
            $this->template->load('template', 'admin/kategori/list');
        }
    }

    function Hapus() {
        $id= $this->uri->segment(4);
        $this->db->where('id_album',$id);
        $this->db->delete('album');
         $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Album');
    }

    function show_by_id() {
        $id_album = $_GET['id_album'];
        $sql_album = "select * from album where id_album='$id_album'";
        $album    = $this->db->query($sql_album)->row_Array();
        $data = array(
            'id_album' => $album['id_album'],
            'nama_album' => $album['nama_album']
        );
        echo json_encode($data);
    }

}

?>