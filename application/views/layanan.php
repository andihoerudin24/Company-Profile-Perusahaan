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
            <h3 class="left">Layanan Kami</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Kamu Berada Di:</li>
                    <li><a href="#">Home</a></li>
                    <li>Layanan</li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- Container / End -->
</section>
<!-- Content -->
<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <?php foreach ($keterangan as $k): ?>
                    <h4><?php echo $k['judul'] ?></h4>
                    <p><?php echo $k['keterangan'] ?></p>
                <?php endforeach; ?>

                <h3>Kami telah memberikan layanan konsultasi terbaik</h3>
                <div class="ic-1"></div>
                <img src="uploads/keterangan_service/<?php echo $keter['foto'] ?>" alt="">
                    <p>
                <div class="title-1"><h4>Layanan Kami:</h4></div>
                <!-- List -->
                <div class="text-1"> 
                    <ul class="list-b">
                        <?php foreach ($service as $s): ?>
                            <li><i class="icon-ok"></i><?php echo $s->nama_service ?>.</li>
                        <?php endforeach; ?>
                    </ul>     
                </div>
                <!-- List End -->
                <!-- List End -->
                <div class="space20"></div>
                <div class="row">
                    <?php foreach ($pengaturan as $p): ?>
                        <div class="span4">
                            <div class="ic-1"><i class="<?php echo $p->icon ?>"></i></div>
                            <div class="title-1"><h4><?php echo $p->judul ?></h4></div>
                            <div class="text-1"> 
                                <?php echo $p->isi; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>   

                <div class="space30"></div> 

                <!-- Typography Row -->

            </div>      
        </div>  

        <div class="row space30"></div>  

        <!-- Our Clients -->
        <div class="row">
            <div class="span12">
                <h3>Clients Kami</h3>
            </div>
        </div> 
        <div id="our-clients" class="slider2 flexslider">
            <ul class="slides">
                <li>
                    <div class="row">
                        <?php foreach ($client as $c): ?>
                        <div class="span2">
                            <a href="#" rel="external">
                                <img src="uploads/client/<?php echo $c->logo ?>" alt="">
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>  
                </li>
            </ul>
        </div> 
        <!-- Our Clients End -->

        <div class="row space50"></div>  
    </div>
</div> 
</div>
<!-- Content End -->



<?php $this->load->view('layouts/footer'); ?>
       