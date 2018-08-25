<header id="header">
    <div class="container">
        <div class="row t-container">

            <!-- Logo -->
            <div class="span3">
                <div class="logo">
                    <a href="#"><img src="<?php echo base_url() ?>front/log.jpeg" alt="" class="image responsive"></a>
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
                        <li><a href="<?php echo site_url('Blog') ?>" title="">Blog</a></li>
                        <li><a href="#" title=""><span>Fitur</span></a>
                            <ul>
                                <li><a href="<?php echo site_url('Layanan') ?>" title="">Layanan</a></li>
                                <li><a href="<?php echo site_url('Pendaftaran') ?>" title="">Pendaftaran</a></li>
                           </ul>    
                        
                    </ul>
                </nav>
            </div> 
        </div> 
        <div class="row space40"></div>
        <div class="slider1 flexslider">  <!-- Slider -->
            <ul class="slides">
                <?php foreach ($banner as $row): ?>
                    <li>
                        <img src="<?php echo base_url() ?>uploads/banner/<?php echo $row->foto ?>" alt="">
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>  <!-- Slider End -->
    </div> 
</header>