<?php

Class Pendaftaran extends CI_Controller {

    function index() {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama'=> $this->input->post('nama'),
                'alamat'=> $this->input->post('alamat'),
                'no_telpon'=> $this->input->post('no_telpon'),
                'gelar'=> $this->input->post('gelar'),
                'nama_pt'=> $this->input->post('nama_pt'),
                'id_sertifikat'=> $this->input->post('id_sertifikat'),
            );
            $this->db->insert('pendaftaran',$data);
            $this->session->set_flashdata('berhasil', 'sukses Mendaftar Pihak Kami Akan Segera Menghubungi Anda Terimakasih');
            redirect('Pendaftaran');  
        } else {
            $this->load->view('pendaftaran');
        }
    }

}

?>