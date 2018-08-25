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
            <h3 class="left">Blog</h3>
        </div>

        <div class="eight columns">
            <nav id="breadcrumbs">
                <ul>
                    <li>Kamu Berada Di:</li>
                    <li><a href="#">Home</a></li>
                    <li>Blog</li>
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
                <h3>&nbsp;</h3>
            </div>

            <div class="span9">

                <!-- Blog Item -->

                <div class="row">
                    <?php foreach ($artikel as $s): ?>
                        <div class="span1">
                            <div class="blog-icon">
                                <i class="icon-paper-clip"></i><br>
                                <h5><?php echo $s->nama_kategori ?></h5>                  
                            </div>
                        </div>
                        <div class="span8">
                            <a href=""><img width="50" src="<?php echo base_url() ?>uploads/artikel/<?php echo $s->foto ?>" class="img-responsive"  alt="image" /></a>

                            <div class="row">
                                <div class="span8 post-d-info">
                                    <a href="<?php echo site_url('Blog/Detail/'.$s->id_artikel) ?>"><h3><?php echo $s->judul; ?></h3></a>
                                    <div class="blue-dark">
                                        <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-size="large" data-mobile-iframe="false"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
                                        <i class="icon-user"></i> By Andi Hoerdin <i class="icon-tag"></i><?php echo $s->nama_kategori ?>
                                    </div>
                                    <p><?php $isi=$s->isi_artikel; ?>
                                       <?php echo $isi=character_limiter($isi,350); ?>
                                        
                                    </p>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Blog Item End -->

                <div class="row space40"></div>   

                <!-- Blog Item -->

                <div class="row space40"></div>   

                <!-- Blog Item -->

                <!-- Paging -->      
                <div class="row">
                    <div class="span9 paging">
                        <?php echo $pagination ?>
                   </div>
                </div> 
                <!-- Paging End -->              

                <div class="row space40"></div>   

            </div>

            <!-- Side Bar -->  
            <div class="span3">
                  <?php echo form_open('Blog/pencarian')  ?>
                <h3 class="p-t-0">CARI</h3>
                <div class="search-box">
                    <button type="submit" name="submit" class="btn-info search-icon"><i class="icon-search"></i></button>
                    <input class="search" name="cari" value="cari">
                </div>  
                        <?php echo form_close(); ?>
                <h3>Kategori</h3>
                <ul class="list-c">
                    <li><i class="icon-chevron-right"></i><a href="<?php echo site_url('Blog') ?>">Semua artikel</a></li>
                    <?php foreach ($kategori as $p): ?>
                    <li><i class="icon-chevron-right"></i><a href="<?php echo site_url('Blog/cari/'.$p->id_kategori) ?>"><?php echo $p->nama_kategori ?></a></li>
                    <?php endforeach; ?>
                </ul>                   
              <div class="row space50"></div>  
            </div>
        </div>
    </div>
</div>
<!-- Content End -->

<?php $this->load->view('layouts/footer'); ?>
       