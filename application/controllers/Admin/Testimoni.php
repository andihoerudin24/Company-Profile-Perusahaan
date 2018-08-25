<?php

class Testimoni extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_testimoni');
         chek_seesion();
    }

    function index() {
        if (isset($_POST['submit'])) {
            $this->Model_testimoni->add();
            $this->session->set_flashdata('berhasil', 'sukses menambah testimoni');
            redirect('Admin/Testimoni');
        } else {
            $data['testimoni'] = $this->db->get('testimoni')->result();
            $this->template->load('template', 'admin/testimoni/list', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_testimoni->edit();
             $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/Testimoni');
        } else {
            $this->template->load('template', 'admin/kategori/list');
        }
    }

    function Hapus() {
        $id= $this->uri->segment(4);
        $this->db->where('id_moni',$id);
        $this->db->delete('Testimoni');
         $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Testimoni');
    }

    function show_by_id() {
        $id_moni = $_GET['id_moni'];
        $sql_testimoni = "select * from testimoni where id_moni='$id_moni'";
        $testimoni = $this->db->query($sql_testimoni)->row_Array();
        $data = array(
            'id_moni' => $testimoni['id_moni'],
            'nama' => $testimoni['nama'],
            'isi_testi' => $testimoni['isi_testi']
        );
        echo json_encode($data);
    }

}

?>