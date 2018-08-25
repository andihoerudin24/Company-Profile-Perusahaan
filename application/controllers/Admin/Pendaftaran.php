<?php

Class Pendaftaran extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->Model('Model_pendaftaran');
         chek_seesion();
    }
            
    function index() {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_telpon' => $this->input->post('no_telpon'),
                'gelar' => $this->input->post('gelar'),
                'nama_pt' => $this->input->post('nama_pt'),
                'id_sertifikat' => $this->input->post('id_sertifikat'),
            );
            $this->db->insert('pendaftaran', $data);
            $this->session->set_flashdata('berhasil', 'sukses Menambah data');
            redirect('Admin/Pendaftaran');
        } else {
            $this->db->select('*');
            $this->db->from('sertifikat');
            $this->db->join('pendaftaran', 'pendaftaran.id_sertifikat=sertifikat.id_sertifikat');
            $data['pendaftaran'] = $this->db->get()->result();
            $this->template->load('template', 'admin/pendaftaran/list', $data);
        }
    }

    function edit() {
        if (isset($_POST['submit'])) {
            $this->Model_pendaftaran->edit();
            $this->session->set_flashdata('edit', 'Sukses edit data');
            redirect('Admin/pendaftaran');
        } else {
            $id_sertifikat= $this->uri->segment(4);
            $data['sertifikat']= $this->db->get_where('pendaftaran',array('id_pendaftar'=>$id_sertifikat))->row_Array(); 
            $this->template->load('template', 'admin/pendaftaran/edit',$data);
        }
    }

    function Hapus() {
        $id = $this->uri->segment(4);
        $this->db->where('id_pendaftar', $id);
        $this->db->delete('pendaftaran');
        $this->session->set_flashdata('hapus', 'berhasil menghapus data');
        redirect('Admin/Pendaftaran');
    }

    function show_by_id() {
        $id_service = $_GET['id_service'];
        $sql_service = "select * from service where id_service='$id_service'";
        $service = $this->db->query($sql_service)->row_Array();
        $data = array(
            'id_service' => $service['id_service'],
            'nama_service' => $service['nama_service']
        );
        echo json_encode($data);
    }
    function laporan(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'PT FOCUS CITRA ALTERNA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'LAPORAN PENDAFTARAN SERTIFIKASI',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'NO',1,0);
        $pdf->Cell(30,6,'NAMA',1,0);
        $pdf->Cell(60,6,'ALAMAT',1,0);
        $pdf->Cell(35,6,'NO TELPON',1,0);
        $pdf->Cell(25,6,'GELAR',1,0);
        $pdf->Cell(25,6,'NAMA PT',1,0);
        $pdf->Cell(35,6,'TANGGAL',1,0);
        $pdf->Cell(50,6,'JENIS SERTIFIKASI',1,1);
        $pdf->SetFont('Arial','',10);
        $this->db->select('*');
        $this->db->from('sertifikat');
        $this->db->join('pendaftaran', 'pendaftaran.id_sertifikat=sertifikat.id_sertifikat');
        $pendaftaran = $this->db->get()->result();
        $no=1;
        foreach ($pendaftaran as $row) {
           $pdf->Cell(10,6,$no,1,0);
           $pdf->Cell(30,6,$row->nama,1,0);
           $pdf->Cell(60,6,$row->alamat,1,0);
           $pdf->Cell(35,6,$row->no_telpon,1,0);
           $pdf->Cell(25,6,$row->gelar,1,0);
           $pdf->Cell(25,6,$row->nama_pt,1,0);
           $pdf->Cell(35,6,$row->tanggal,1,0);
           $pdf->Cell(50,6,$row->nama_sertifikat,1,1);
      
                 
        $no++;         
        }
        $pdf->Output();
    }

}

?>