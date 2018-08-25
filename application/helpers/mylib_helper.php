<?php

function cmb_dinamis($name, $table, $field, $pk, $selected = NULL, $extra = NULL) {
    $ci = &get_instance();
    $cmb = "<select name='$name' class='form-control' $extra>";
    $data = $ci->db->get($table)->result();
    foreach ($data as $row) {
        $cmb .= "<option value='" . $row->$pk . "'";
        $cmb .= $selected == $row->$pk ? 'selected' : '';
        $cmb .= ">" . $row->$field . "</option>";
    }
    $cmb .= "</select>";
    return $cmb;
}

function tanggal() {
    return date('Y-m-d');
}

function chek_seesion() {
    $ci = &get_instance();
    $session = $ci->session->userdata('status_login');
    if ($session != 'ok') {
        redirect('Auth');
    }
}

function chek_seesion_login() {
    $ci = &get_instance();
    $session = $ci->session->userdata('status_login');
    if ($session == 'ok') {
        redirect('Dokumentasi');
    }
}

function tgl_indo($tanggals) {
    //2018-02-01
    //concert to 01-02-2018
    $tanggal = substr($tanggals, 8, 2);
    $bulan = substr($tanggals, 5, 2);
    $tahun = substr($tanggals, 0, 4);
    return $tanggal . "-" . $bulan . "-" . $tahun;
}

function bulan($bulan) {
    switch ($bulan) {
        case 1: return 'Januari';
            break;

        case 2: return 'Febuari';
            break;

        case 3: return 'Maret';
            break;

        case 4: return 'April';
            break;

        case 5: return 'Mei';
            break;

        case 6: return 'Juni';
            break;

        case 7: return 'juli';
            break;

        case 8: return 'Agustus';
            break;

        case 9: return 'September';
            break;

        case 10: return 'Oktober';
            break;

        case 11: return 'November';
            break;

        case 12: return 'Desemeber';
            break;
    }
}

function artikelTerkait($id) {

    $ci = &get_instance();
    $threshold = 20;
    $maksArtikel = 10;
    $list = array();
    $hasil = $ci->db->query("SELECT judul FROM artikel WHERE id_artikel='$id'")->row_array();
    $r = $hasil['judul'];
    $query = $ci->db->query("SELECT judul,id_artikel FROM artikel WHERE id_artikel <> '$id' limit $maksArtikel ")->result();
    foreach ($query as $val) {
        similar_text($r, $val->judul, $persen);
        if ($persen >= $threshold) {

            echo anchor('Blog/Detail/' . $val->id_artikel, $val->judul, array('class' => 'tag'));
        }
    }
}

function Terbilang($x) {
    $abil = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    if ($x < 12)
        return "" . $abil[$x];
    elseif ($x < 20)
        return Terbilang($x - 10) . "Belas";
    elseif ($x < 100)
        return Terbilang($x / 10) . " Puluh" . Terbilang($x % 10);
    elseif ($x < 200)
        return " Seratus" . Terbilang($x - 100);
    elseif ($x < 1000)
        return Terbilang($x / 100) . " Ratus" . Terbilang($x % 100);
    elseif ($x < 2000)
        return " Seribu" . Terbilang($x - 1000);
    elseif ($x < 1000000)
        return Terbilang($x / 1000) . " Ribu" . Terbilang($x % 1000);
    elseif ($x < 1000000000)
        return Terbilang($x / 1000000) . " Juta" . Terbilang($x % 1000000);
}

?>