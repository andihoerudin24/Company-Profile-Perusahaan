<?php
Class Dashboard extends CI_Controller{
    function __construct() {
        parent::__construct();
        chek_seesion();
    }
            function index(){
        $x['data'] = $this->db->query("SELECT count(*) as jumlah_data FROM pendaftaran")->result();
        $this->template->load('template','dashboard',$x);
    }
}


?>