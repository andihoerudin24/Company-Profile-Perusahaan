<?Php

Class Blog extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_artikel');
        $this->load->library('pagination');
    }

    function index() {
        $config['base_url'] = site_url('Blog/index');
        $config['total_rows'] = $this->Model_artikel->br()->num_rows();
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
        $data['artikel'] = $this->Model_artikel->join_br($config["per_page"], $data['page'])->result();
        //  $data['artikel'] = $this->db->get('v_artikel')->result();
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('blog', $data);
    }

    function cari() {
        $config['base_url'] = site_url('Blog/index');
        $config['total_rows'] = $this->Model_artikel->br()->num_rows();
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
        $keyword = $this->uri->segment(3);
        $this->db->select('*');
        $this->db->from('v_artikel');
        $this->db->where('id_kategori', $keyword);
        $data['artikel'] = $this->db->get()->result();
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->View('blog', $data);
    }

    function Detail() {
        //  $data['artikel'] = $this->db->get('v_artikel')->result();
        $id_artikel = $this->uri->segment(3);
        $data['artikel'] = $this->db->get_where('v_artikel', array('id_artikel' => $id_artikel))->result();
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('detail', $data);
    }
    
    
    function pencarian(){
        $config['base_url'] = site_url('Blog/index');
        $config['total_rows'] = $this->Model_artikel->br()->num_rows();
        $config['per_page'] = 10;
        $config["uri_segment"] = 3;
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data['pagination'] = $this->pagination->create_links();
        $keyword = $this->input->post('cari');
        $this->db->select('*');
        $this->db->from('v_artikel');
        $this->db->where('judul',$keyword);
        $data['artikel'] = $this->db->get()->result();
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->View('blog', $data);
    }
    
    


}
?>