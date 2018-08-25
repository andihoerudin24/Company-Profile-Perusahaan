<?php

class Artikel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_artikel');
         chek_seesion();
    }

    function index() {
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'kategori.id_kategori=artikel.id_kategori');
        $data['artikel'] = $this->db->get()->result();
        $this->template->load('template', 'admin/artikel/list', $data);
    }

    function add() {
        if (isset($_POST['submit'])) {
            $upload = $this->upload();
            $this->Model_artikel->add($upload);
            $this->session->set_flashdata('berhasil', 'Sukses menambah artikel');
            redirect('Admin/Artikel');
        } else {
             $this->template->load('template', 'admin/artikel/add');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $upload = $this->upload();
            $this->Model_artikel->edit($upload);
            $this->session->set_flashdata('edit', 'Sukses edit artikel');
            redirect('Admin/Artikel');
        } else {
            $id_artikel= $this->uri->segment(4);
            $data['artikel']= $this->db->get_where('artikel',array('id_artikel'=>$id_artikel))->row_Array(); 
            $this->template->load('template', 'admin/artikel/edit',$data);
        }
    }

    function Hapus() {
        $id_artikel = $this->uri->segment(4);
        $this->db->where('id_artikel',$id_artikel);
        $this->db->delete('artikel');
        $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Artikel');
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