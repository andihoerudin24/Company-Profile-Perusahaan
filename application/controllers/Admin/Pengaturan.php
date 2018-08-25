<?php

class Pengaturan extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pengaturan');
         chek_seesion();
    }

    function index() {
        $this->db->select('*');
        $this->db->from('pengaturan');
        $data['pengaturan'] = $this->db->get()->result();
        $this->template->load('template', 'admin/pengaturan/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $this->Model_pengaturan->add();
            $this->session->set_flashdata('berhasil', 'Sukses menambah data');
            redirect('Admin/Pengaturan');
        } else {
             $this->template->load('template', 'admin/pengaturan/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_pengaturan->edit();
            $this->session->set_flashdata('edit', 'Sukses edit');
            redirect('Admin/Pengaturan');
        } else {
            $id_pengaturan= $this->uri->segment(4);
            $data['pengaturan']= $this->db->get_where('pengaturan',array('id_pengaturan'=>$id_pengaturan))->row_Array(); 
            $this->template->load('template', 'admin/pengaturan/edit',$data);
        }
    }

    function Hapus() {
        $id_pengaturan = $this->uri->segment(4);
        $this->db->where('id_pengaturan',$id_pengaturan);
        $this->db->delete('pengaturan');
        $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Pengaturan');
    }

    function upload() {
        $config['upload_path'] = './uploads/artikel';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 5000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

}

?>