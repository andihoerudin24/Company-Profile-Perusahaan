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
            <h3 class="left">Gallery Kami</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Kamu Berada Di:</li>
                    <li><a href="#">Home</a></li>
                    <li>Gallery</li>
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
                <h4>Gallery</h4>

                <div class="row">
                    <div class="span12">  
                        <!-- portfolio filter -->		
                        <ul id="portfolio-filter">
                            <li class="active"><a href="<?php echo site_url('Gallery') ?>" class="filter" data-filter="*">All</a></li>
                            <?php foreach ($album as $g): ?>
                            <li><a href="<?php echo site_url('Gallery/cari/'.$g->nama_album) ?>" class="filter" data-filter=".<?php echo $g->nama_album ?>"><?php echo $g->nama_album ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                        <section class="row" id="portfolio-items">
                            <ul class="portfolio">
                                <?php foreach ($gallery as $r): ?>
                                <li>
                                    <article class="span3 project" data-tags="<?php echo $r->nama_album ?>">     
                                        <a href="<?php echo base_url() ?>uploads/gallery/<?php echo $r->foto ?>">
                                            <div class="square-1">
                                                <div class="img-container">
                                                    <img src="<?php echo base_url() ?>uploads/gallery/<?php echo $r->foto ?>" alt="">
                                                    <div class="img-bg-icon"></div>
                                                </div>
                                                <h3><?php echo $r->nama_foto ?></h3>
                                                </div>
                                        </a>
                                    </article>
                                </li>
                                <?php endforeach; ?>
                            </ul> 
                        </section>   

                        <!-- Content End -->
                    </div>
                </div> 
            </div> 
        </div> 
    </div>
</div> 

</div>
</div>
</div>
<!-- Content End -->


<?php $this->load->view('layouts/footer'); ?>
       