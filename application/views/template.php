
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Dashboard Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
              rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>assets/css/pages/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/DataTables/datatables.min.css"/>
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                            class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="#">Selamat Datang <?php echo $this->session->userdata('username') ?> </a>
                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                                        class="icon-user"></i> <?php echo $this->session->userdata('username') ?> <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo site_url('Admin/Auth/logout') ?>">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse --> 
                </div>
                <!-- /container --> 
            </div>
            <!-- /navbar-inner --> 
        </div>
        <!-- /navbar -->
        <div class="subnavbar">
            <div class="subnavbar-inner">
                <div class="container">
                    <ul class="mainnav">
                        <li class="active"><a href="<?php echo site_url('Admin/Team') ?>"><i class="icon-dashboard"></i><span>Team Kami</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Gallery') ?>"><i class="icon-picture"></i><span>Gallery</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Album') ?>"><i class="icon-eye-open"></i><span>Album</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Artikel') ?>"><i class=" icon-pencil"></i><span>Artikel</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Kategori') ?>"><i class="icon-bullhorn"></i><span>Kategori Artikel</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Sertifikat') ?>"><i class="icon-pinterest"></i><span>Sertifikat</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Dashboard') ?>"><i class="icon-dashboard"></i><span>Grafik Pendaftaran</span> </a> </li>
                        <li><a href="<?php echo site_url('Admin/Pendaftaran') ?>"><i class="icon-reply"></i><span>Pendaftaran</span> </a> </li>
                        <li class="dropdown"><a href="javascript:" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Pengaturan</span> <b class="caret"></b></a>
                         <ul class="dropdown-menu">
                                <li><a href="<?php echo site_url('Admin/Pengaturan') ?>"><i class="icon-strikethrough"></i><span>Pengaturan</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Keterangan') ?>"><i class="icon-tag"></i><span>Keterangan Service</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Client') ?>"><i class="icon-group"></i><span>Data Client</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Testimoni') ?>"><i class="icon-tasks"></i><span>Testimoni</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Banner') ?>"><i class="icon-bullhorn"></i><span>Banner</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Visi') ?>"><i class="icon-list-alt"></i><span>Visi & Misi</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Tentang') ?>"><i class="icon-tint"></i><span>Tentang Kami</span> </a> </li>
                                <li><a href="<?php echo site_url('Admin/Layanan') ?>"><i class=" icon-bookmark"></i><span>Layanan</span> </a> </li>
                            </ul>
                        </li> 

                    </ul>
                </div>
                <!-- /container --> 
            </div>
            <!-- /subnavbar-inner --> 
        </div>
        <!-- /subnavbar -->
        <div class="main">
            <div class="main-inner">
                <div class="container">
                    <?php echo $contents; ?>
                    <!-- /container --> 
                </div>
                <!-- /main-inner --> 
            </div>
            <!-- /main -->

            <!-- /extra -->
            <div class="footer">
                <div class="footer-inner">
                    <div class="container">
                        <div class="row">
                            <div class="span12"> &copy; <a href="#">Andi Hoerudin</a>. </div>
                            <!-- /span12 --> 
                        </div>
                        <!-- /row --> 
                    </div>
                    <!-- /container --> 
                </div>
                <!-- /footer-inner --> 
            </div>
            <!-- /footer --> 
            <!-- Le javascript
            ================================================== --> 
            <!-- Placed at the end of the document so the pages load faster --> 
            <script src="<?php echo base_url() ?>assets/js/jquery-1.7.2.min.js"></script> 
            <script src="<?php echo base_url() ?>assets/js/excanvas.min.js"></script> 
            <script src="<?php echo base_url() ?>assets/js/chart.min.js" type="text/javascript"></script> 
            <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
            <script language="javascript" type="text/javascript" src="<?php echo base_url() ?>asssets/js/full-calendar/fullcalendar.min.js"></script>

            <script type="text/javascript" src="<?php echo base_url() ?>assets/DataTables/datatables.min.js"></script>
            <script src="<?php echo base_url() ?>assets/js/base.js"></script> 

            <script src="<?php echo base_url() ?>assets/js/ckeditor.js"></script>
            <script>

                $(document).ready(function () {
                    $('#example').DataTable();
                });
            </script>
            <script>
                ClassicEditor
                        .create(document.querySelector('#editor'))
                        .then(editor => {
                            console.log(editor);
                        })
                        .catch(error => {
                            console.error(error);
                        });
            </script>

    </body>
</html>
