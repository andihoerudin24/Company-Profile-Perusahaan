<?php

Class Auth extends CI_Controller {

    var $API = "";

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_admin');
        $this->API = "https://hoeruidn.000webhostapp.com";
    }

    function index() {
        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $login = json_decode($this->curl->simple_get($this->API . '/Login'));
            if ($login[0]->username != $username or $login[0]->password != $password) {
                $this->session->set_flashdata('gagal', 'username dan password anda salah');
                redirect('Admin/Auth');
            } else {
                $this->session->set_userdata(array('username' => $login[0]->username));
                $this->session->set_userdata(array('status_login' => 'ok'));
                redirect('Admin/Dashboard');
            }
        } else {

            $this->load->view('login/auth');
        }
    }

    function daftar() {
        $this->load->view('login/daftar');
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('Admin/Auth');
    }

}

?>