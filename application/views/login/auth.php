
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login Aplikasi</title>

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

                    <a class="brand" href="#">
                        Silahkan Login Terlebih Dahulu				
                    </a>		

                    <div class="nav-collapse">
                        <ul class="nav pull-right">

                            <li class="">
                            </li>

                        </ul>

                    </div><!--/.nav-collapse -->	

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->



        <div class="account-container">
            <?php
            if ($this->session->flashdata('salah')) {
                echo "<div class='alert alert-danger'>";
                echo $this->session->flashdata('salah');
                echo "</div>";
            }
            ?> 
            <div class="content clearfix">

                <?php echo form_open('Admin/Auth') ?>


                <h1> Login</h1>		

                <div class="login-fields">

                    <p>Masukan Username Dan Password</p>


                    <div class="field">
                        <label for="username">Username</label>
                        <input type="text" required="" id="username" name="username" value="" placeholder="Username" class="login username-field" />
                    </div> <!-- /field -->

                    <div class="field">
                        <label for="password">Password:</label>
                        <input type="password" required="" id="password" name="password" value="" placeholder="Password" class="login password-field"/>
                    </div> <!-- /password -->

                </div> <!-- /login-fields -->

                <div class="login-actions">


                    <button class="button btn btn-success btn-large" type="submit" name="submit">Masuk</button>

                </div> <!-- .actions -->


                <?php echo form_close(); ?>

            </div> <!-- /content -->

        </div> <!-- /account-container -->



        <div class="login-extra">
            <a href="#">Lupa Password</a>
        </div> <!-- /login-extra -->


        <script src="<?php echo base_url() ?>assets/js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>

        <script src="<?php echo base_url() ?>assets/js/signin.js"></script>

    </body>

</html>
