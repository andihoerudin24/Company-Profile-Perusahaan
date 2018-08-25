<?php $this->load->view('layouts/header'); ?>   
<header id="header">
    <div class="container">
        <div class="row t-container">

            <!-- Logo -->
            <div class="span3">
                <div class="logo">
                    <a href="#"><img src="<?php echo base_url() ?>front/log.jpeg" alt=""></a>
                </div>            
            </div>
            <div class="span9">
                <div class="row space60"></div>
                <nav id="nav" role="navigation">
                    <a href="#nav" title="Show navigation">Show navigation</a>
                    <a href="#" title="Hide navigation">Hide navigation</a>
                    <ul class="clearfix">
                        <li><a href="<?php echo site_url('Company') ?>" title="">Home</a></li>
                        <li><a href="<?php echo site_url('Tentang') ?>" title="">Tentang Kami</a></li>                
                        <li><a href="<?php echo site_url('Gallery') ?>" title="">Gallery</a></li>
                        <li><a href="#" title=""><span>Fitur</span></a>
                            <ul>
                                <li><a href="<?php echo site_url('Layanan') ?>" title="">Layanan</a></li>
                                <li><a href="<?php echo site_url('Pendaftaran') ?>" title="">Pendaftaran</a></li>
                            </ul>    

                        <li><a href="<?php echo site_url('Blog') ?>" title="">Blog</a></li>
                    </ul>
                </nav>
            </div> 
        </div> 
    </div> 
</header>
<br><br>
<section id="titlebar">
    <!-- Container -->
    <div class="container">

        <div class="eight columns">
            <h3 class="left">Form Pendaftaran</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Kamu Berada Di:</li>
                    <li><a href="#">Home</a></li>
                    <li>Form Pendaftaran</li>
                </ul>
            </nav>

        </div>

    </div>

    <?php
    if ($this->session->flashdata('berhasil')) {
        echo "<div class='alert alert-error'>";
        echo " <button type='button' class='close' data-dismiss='alert'>×</button>
        <strong>Sukses</strong>.";
        echo $this->session->flashdata('berhasil');
        echo "</div>";
    } elseif ($this->session->flashdata('edit')) {
        echo "<div class='alert alert-warning'>";
        echo " <button type='button' class='close' data-dismiss='alert'>×</button>
        <strong>Sukses</strong>.";
        echo $this->session->flashdata('edit');
        echo "</div>";
    } elseif ($this->session->flashdata('hapus')) {
        echo "<div class='alert alert-danger'>";
        echo " <button type='button' class='close' data-dismiss='alert'>×</button>
        <strong>Sukses</strong>.";
        echo $this->session->flashdata('hapus');
        echo "</div>";
    }
    ?>

</section>
<!-- Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <h3>Silahkan Isi Form Pendftaran</h3>
            </div>
        </div>
        <?php echo form_open('Pendaftaran') ?>
        <div class="row">
            <div class="span6">
                <div class="text-1"> 
                    <ul class="list-b">
                        <label>Masukan Nama</label>
                        <li><i class="icon-ok"></i><input type="text" name="nama" class="form-control"></li>
                        <label>Masukan Alamat</label>
                        <li><i class="icon-map-marker"></i><textarea name="alamat" class="form-control"></textarea></li>
                         <label>Masukan Nomor Telpon</label>
                        <li><i class="icon-phone"></i><input  type="number" maxlength="13" name="no_telpon" class="form-control"></li>
                    </ul>
                </div>
            </div>
            <div class="span6">
                <div class="text-1"> 
                    <ul class="list-b">
                        <label>Masukan Gelar</label>
                        <li><i class="icon-ok"></i><input type="text" name="gelar" class="form-control"></li>
                        <label>Masukan Nama Perusahaan (opsional)</label>
                        <li><i class="icon-pushpin"></i><textarea name="nama_pt" placeholder="nama pt" class="form-control"></textarea></li>
                        <label>Pilih Jenis sertifikasi</label>
                        <li><i class="icon-leaf"></i><?php echo cmb_dinamis('id_sertifikat', 'sertifikat', 'nama_sertifikat', 'id_sertifikat') ?></li>
                  <button type="submit" name="submit" class="btn btn-danger btn-sm">DAFTAR</button>  
                  </ul>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
     </div>
  </div>  

        <div class="row space30"></div>  

        
        <div class="row space50"></div>  
    </div>
</div> 
</div>
<!-- Content End -->



<?php $this->load->view('layouts/footer'); ?>
       