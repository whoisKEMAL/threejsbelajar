<?php
include_once('conf/koneksi.php');
if(isset($_SESSION["username"])) {
 header("location:menus-admin.php");
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/js/animsition.min.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="/js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">




            <div class="page page-core page-login">

                <div class="text-center"><h3 class="text-light text-white"><span class="text-lightred"></span>3DChem</h3></div>

                <div class="container w-420 p-15 bg-white mt-40 text-center">


                    <h2 class="text-light text-greensea">Silahkan Login dulu</h2>

                    <form method="POST" name="form" class="form-validation mt-20" action="proses-login.php" novalidate="">

                        <div class="form-group">
                            <input type="text" name="username" class="form-control underline-input" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input type="password" name="pass" placeholder="Password" class="form-control underline-input">
                        </div>

                        <div class="form-group text-left mt-20">
                            <button type="submit" class="btn btn-greensea" id="form1Submit" > Login</button>
                        </div>

                    </form>

                    Belum memiliki akun? daftar <a href="signup.php">disini</a>

                    <hr class="b-3x">
                                Copyright © 2018
                                <a href="github.com/whoisKEMAL">whoiskemal</a>
                                 All rights reserved.
                                </div> 
                    </div>

                </div>

            </div>



        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="assets/js/bootstrap.min.js"></script>

        <script src="assets/js/jRespond.min.js"></script>

        <script src="assets/js/jquery.sparkline.min.js"></script>

        <script src="assets/js/jquery.slimscroll.min.js"></script>

        <script src="assets/js/jquery.animsition.min.js"></script>

        <script src="assets/js/screenfull.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="assets/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){


            });
        </script>
        <!--/ Page Specific Scripts -->

    </body>
</html>
