<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->db->select('*');
        $this->db->from('banner');
        $data['banner'] = $this->db->get()->result();
        $this->db->select('*');
        $this->db->from('pengaturan');
        $data['pengaturan'] = $this->db->get()->result();
        $data['service'] = $this->db->get('service')->result();
        $this->db->select('*');
        $this->db->from('client');
        $data['client'] = $this->db->get()->result();
        $this->load->view('welcome_message', $data);
    }

}
