<?php

Class Model_visi extends CI_Model {

    function edit($misi) {
        if (!empty($misi)) {

            $data = array(
                'misi' => $misi
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('misi', $data);
        }else{
            
            $data = array(
                'visi' => $this->input->post('visi')
            );
            $id = $this->input->post('id');
            $this->db->where('id', $id);
            $this->db->update('misi', $data);
        }
    }

}

?>