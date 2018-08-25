<?php $this->load->view('layouts/header'); ?>   
<?php $this->load->view('layouts/navigasi'); ?>
<div id="content">
    <div class="container">
        <div class="f-center">
            <h2>PT FOCUS CITRA ALTERNA</h2>
            <div class="head-info">
                Menyediakan layanan konsultansi dan pelatihan bagi institusi pemerintah dan perusahaan swasta.
            </div>  
        </div>
        <div class="f-hr"></div>
        <div class="row space40"></div>
        <div class="row">
            <div class="span12">
                <div class="row">
                    <?php foreach ($pengaturan as $r): ?>
                        <!-- Service Container --> 
                        <div class="span4">
                            <!-- Service Icon --> 
                            <div class="ic-1"><i class="<?php echo $r->icon ?>"></i></div>
                            <!-- Service Title --> 
                            <div class="title-1"><h4><?php echo $r->judul ?></h4></div>
                            <!-- Service Content --> 
                            <div class="text-1"> 
                                <?php echo $r->isi; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>   
            </div>   

            <div class="span12">
                <h2>Kami telah memberikan layanan konsultasi terbaik</h2>
            </div> 
            <div class="span8">        
                <img src="<?php echo base_url() ?>front/img/IMG-20160812-WA0003.jpg" alt="" class="image responsive">
            </div>
            <div class="span4">
                <div class="ic-1"></div>
                <div class="title-1"><h4>Layanan Kami:</h4></div>
                <!-- List -->
                <div class="text-1"> 
                    <ul class="list-b">
                        <?php foreach ($service as $s): ?>
                            <li><i class="icon-ok"></i><?php echo $s->nama_service ?></li>
                        <?php endforeach; ?>
                    </ul>     
                </div>
                <!-- List End -->
            </div>

        </div>

        <div class="space40"></div>  

        <!-- Our Clients -->
        <div class="row">
            <div class="span12">
                <h3>Client Kami</h3>
            </div>
        </div> 

        <div id="our-clients" class="slider2 flexslider">
            <ul class="slides">
                    
                <li>
                    <div class="row">
                         <?php foreach ($client as $c): ?>
               
                            <div class="span2">
                                <a href="#" rel="external">
                                    <img src="<?php echo base_url() ?>uploads/client/<?php echo $c->logo ?>" alt="">
                                </a>
                            </div>
                        
                          <?php endforeach; ?>
                        </div>
                    
                    </li>
            </ul>
        </div> 
        <!-- Our Clients End -->

        <div class="space50"></div> 

    </div>
</div>
<?php $this->load->view('layouts/footer'); ?>
       
