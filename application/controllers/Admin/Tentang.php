<?php

Class Tentang extends CI_Controller {

    function __construct() {
        parent::__construct();
         chek_seesion();
    }
            function index() {
        if (isset($_POST['submit'])) {
            $data=array(
                'sejarah'=> $this->input->post('sejarah')
            );
            $id=1;
            $this->db->where('id_tentang',$id);
            $this->db->update('tentang',$data);
            redirect('Admin/Tentang');
        } else {
            $data['tentang'] = $this->db->get('tentang')->result();
            $this->template->load('template', 'admin/tentang/list', $data);
        }
    }

    function edit() {
        $id = $this->uri->segment(4);
        $data['tentang'] = $this->db->get_where('tentang', array('id_tentang' => $id))->row_array();
        $this->template->load('template', 'admin/tentang/list', $data);
    }

}

?>