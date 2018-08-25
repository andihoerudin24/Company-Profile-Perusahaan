<?php

class Keterangan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_keterangan');
         chek_seesion();
    }

    function index() {
        $this->db->select('*');
        $this->db->from('keterangan_service');
        $data['keterangan'] = $this->db->get()->result();
        $this->template->load('template', 'admin/keterangan/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_keterangan->add();
            $this->session->set_flashdata('berhasil', 'Sukses menambah artikel');
            redirect('Admin/Keterangan');
        } else {
            $this->template->load('template', 'admin/keterangan/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $upload = $this->upload();
            $this->Model_keterangan->edit($upload);
            $this->session->set_flashdata('edit', 'Sukses edit artikel');
            redirect('Admin/Keterangan');
        } else {
            $id = $this->uri->segment(4);
            $data['keterangan'] = $this->db->get_where('keterangan_service', array('id' => $id))->row_Array();
            $this->template->load('template', 'admin/keterangan/edit', $data);
        }
    }

    function Hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id', $id);
        $this->db->delete('keterangan_service');
        $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Keterangan');
    }

    function upload() {
        $config['upload_path'] = './uploads/keterangan_service';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>