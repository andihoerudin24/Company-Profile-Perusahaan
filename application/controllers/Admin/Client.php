<?php

Class Client extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_client');
        $this->load->library('pagination');
         chek_seesion();
    }

    function index() {
        $config['base_url'] = site_url('Admin/Client/index');
        $config['total_rows'] = $this->Model_client->br()->num_rows();
        $config['per_page'] = 8;
        $config["uri_segment"] = 4;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav></div>';
        $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only"></span></span></li>';
        $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $data['pagination'] = $this->pagination->create_links();
        $data['client'] = $this->Model_client->join_br($config["per_page"], $data['page'])->result();
        $this->template->load('template', 'admin/client/list', $data);
    }

    function cari() {
        if (isset($_POST['submit'])) {
            $config['base_url'] = site_url('Admin/Client/index');
            $config['total_rows'] = $this->Model_client->br()->num_rows();
            $config['per_page'] = 8;
            $config["uri_segment"] = 4;
            $choice = $config["total_rows"] / $config["per_page"];
            $config["num_links"] = floor($choice);
            $config['first_link'] = 'First';
            $config['last_link'] = 'Last';
            $config['next_link'] = 'Next';
            $config['prev_link'] = 'Prev';
            $config['full_tag_open'] = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close'] = '</ul></nav></div>';
            $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close'] = '</span></li>';
            $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close'] = '<span class="sr-only"></span></span></li>';
            $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close'] = '</span>Next</li>';
            $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close'] = '</span></li>';
            $this->pagination->initialize($config);
            $data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
            $data['pagination'] = $this->pagination->create_links();
            $keyword = $this->input->post('cari');
            $this->db->select('*');
            $this->db->from('client');
            $this->db->where('nama_client', $keyword);
            $data['client'] = $this->db->get()->result();
            $this->template->load('template', 'admin/client/list', $data);
        }
    }

    function add() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_client->add($foto);
            $this->session->set_flashdata('berhasil', 'Sukses menambah client');
            redirect('Admin/Client');
        } else {
            $this->template->load('template', 'admin/client/list');
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $foto = $this->upload();
            $this->Model_client->edit($foto);
            $this->session->set_flashdata('edit', 'Sukses edit banner');
            redirect('Admin/Client');
        }
    }

    function hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id_client', $id);
        $this->db->delete('client');
        $this->session->set_flashdata('hapus', 'berhasil menghapus ');
        redirect('Admin/Client');
    }

    function upload() {
        $config['upload_path'] = './uploads/client';
        $config['allowed_types'] = 'gif|png|jpg';
        $config['max_size'] = 10000;
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $uploads = $this->upload->data();
        return $uploads['file_name'];
    }

    function show_by_id() {
        $id_client = $_GET['id_client'];
        $sql_client = "select * from client where id_client='$id_client'";
        $client = $this->db->query($sql_client)->row_Array();
        $data = array(
            'id_client'   => $client['id_client'],
            'nama_client' => $client['nama_client'],
            'logo'        =>$client['logo'],
        );
        echo json_encode($data);
    }

}

?>