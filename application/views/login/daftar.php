
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Dafatr</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes"> 

        <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />

        <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url() ?>assets/css/pages/signin.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div class="navbar navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="index.html">
                        Silahkan Daftar Terlebih Dahulu				
                    </a>		

                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <li class="">						
                                <a href="<?php echo site_url('Admin/Auth') ?>" class="">
                                    Sudah Punya Akun? Silahkan login
                                </a>

                            </li>
                        </ul>

                    </div><!--/.nav-collapse -->	

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->



        <div class="account-container register">

            <div class="content clearfix">

                <form action="#" method="post">

                    <h1>Signup for Free Account</h1>			

                    <div class="login-fields">

                        <p>Daftar Untuk Mendapatkan Akses Masuk</p>


                        <div class="field">
                            <label for="lastname">Nama:</label>	
                            <input type="text" id="lastname" name="nama_lengkap" value="" placeholder="nama" class="login" />
                        </div> <!-- /field -->


                        <div class="field">
                            <label for="username">Username:</label>
                            <input type="text"  name="username" value="" placeholder="username" class="login"/>
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" value="" placeholder="Password" class="login"/>
                        </div> <!-- /field -->

                        <div class="field">
                            <label for="confirm_password">Konfrimasi Password:</label>
                            <input type="password" id="confirm" name="confirm_password" value="" placeholder="Confirm Password" class="login"/>
                        </div> <!-- /field -->

                    </div> <!-- /login-fields -->

                    <div class="login-actions">


                        <button class="button btn btn-primary btn-large" name="submit">Register</button>

                    </div> <!-- .actions -->

                </form>

            </div> <!-- /content -->

        </div> <!-- /account-container -->


        <!-- Text Under Box -->
        <div class="login-extra">
            Sudah Punya Akun? <a href="<?php echo site_url('Admin/Auth') ?>">Silahkan Login</a>
        </div> <!-- /login-extra -->


        <script src="<?php echo base_url() ?>assets/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>

        <script src="<?php echo base_url() ?>assets/js/signin.js"></script>

    </body>

</html>
