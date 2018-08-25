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
            <h3 class="left">Tentang Kami</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Kamu Berada Di:</li>
                    <li><a href="#">Home</a></li>
                    <li>Tentang</li>
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
                <center><h4><b>Sejarah</b></h4></center> 
                <?php foreach ($tentang as $t): ?>
                    <p><?php echo $t->sejarah ?></p>
                <?php endforeach; ?>
                    <center><h4><b>Visi</b></h4></center>
                <?php foreach ($visi as $v): ?>
                    <center><p><?php echo $v->visi; ?></p> </center>  
                <?php endforeach; ?>
                    <center><h4><b>Misi</b></h4></center> 
                <?php foreach ($visi as $m): ?>
                    <center><p><?php echo $m->misi ?></p></center>
                <?php endforeach; ?>
                <!-- Our Team -->      
                <h3>Our Team</h3>

                <div  class="slider2 team flexslider">
                    <ul class="slides">
                        <li>
                            <div class="row">
                                <?php foreach ($team as $t): ?>
                                    <a href="#">
                                        <div class="span3 square-1">
                                            <div class="img-container">
                                                <img src="uploads/team/<?php echo $t->foto ?>" alt="">
                                                <div class="img-bg-icon"></div>
                                            </div>
                                            <h4><?php echo $t->nama ?></h4>
                                            <?php echo $t->bagian ?> 
                                        </div>
                                    </a>
                                <?php endforeach; ?>

                            </div> 
                        </li>

                    </ul>
                </div>
                <!-- Our Team End -->      

                <!-- Typography Row -->
                <div class="row t-row">
                    <!-- Line -->
                    <div class="span12"><hr></div>
                    <div class="span9">
                        <h2>Lihat Apa Kata Mereka</h2>
                    </div>
                    <div class="space30 visible-phone"></div>
                    <!-- Line -->
                    <div class="span12"><hr></div>
                </div>
                <!-- Typography Row End-->

                <div class="row space10"></div>  

                <div class="row">
                    <!-- List -->    
                    <!-- Client Says --> 
                    <?php foreach ($testimoni as $t): ?>
                    <div class="span4">
                        <h3>Client Berkata</h3> 
                        <div class="client-says">            
                            “<?php echo $t->isi_testi; ?>”
                        </div>
                        <div class="client-says-2">
                            <div class="quotes">
                                <i class="icon-quote-right"></i><?php echo $t->nama ?>.
                            </div>  
                        </div> 
                    </div>
                    <?php endforeach; ?>
                    <!-- Client Says End --> 
                </div> 

                <div class="row space50"></div>  
            </div>
        </div>
    </div>
</div>
<!-- Content End -->


<?php $this->load->view('layouts/footer'); ?>
       