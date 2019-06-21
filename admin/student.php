<?php
    include_once dirname(__FILE__).'/models/Tools.php';
    if(!Tools::isConnected()){
        header('Location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Monster Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border">
    <style>
        .bd {
            border: 1px solid black;
        }

        .pad {
            padding-left: 15px;
            padding-right: 15px;
        }
        .ba{padding-bottom: 15px; padding-top: 15px; margin-bottom: 25px;}
        .mycard{background: white; border-radius: 5px;}
    </style>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <?php include_once dirname(__FILE__).'/header.php'; ?>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <?php include_once dirname(__FILE__).'/nav.php'; ?>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Student</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Student</li>
                        </ol>
                    </div>
                    <div class="col-md-6 col-4 align-self-center">

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <form action="" enctype="multipart/form-data">
                    <div class="row">
                        <!-- Column -->
                        <div class="col-lg-4 col-xlg-3 col-md-5">
                            <div class="card">
                                <div class="card-block">
                                    <center class="m-t-30">
                                        <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                                        <br><br>
                                        <input type="file" name="prof" id="">
                                        <br>
                                        <div style="height: 15px;"></div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        <!-- Column -->
                        <div class="col-lg-8 col-xlg-9 col-md-7">
                            <div class="card">
                                <div class="card-block">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Slug"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group row pad">
                                        <div class="col-md-6">
                                            <input type="text" placeholder="First Name"
                                                class="form-control form-control-line">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" placeholder="Last Name"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <textarea placeholder="" class="form-control form-control-line" name=""
                                                id=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>

                    <fieldset class="col-lg-12">
                        <legend>Social Media</legend>
                        <div class="row ba mycard pad">
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="email" placeholder="E-mail" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Linkedin" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Facebook" class="form-control form-control-line">
                                    </div>
                                </div>
                        </div>
    
                        <div class="row ba mycard pad">
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Instagram" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Twitter" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Web Site" class="form-control form-control-line">
                                    </div>
                                </div>
                        </div>
                    </fieldset>

                    <fieldset class="col-lg-12">
                        <legend class="text-center">Poster</legend>
                        <div class="row ba mycard pad">
                            <input type="file" name="" id="">
                        </div>
                    </fieldset>
                    
                    <fieldset class="col-lg-12">
                        <legend class="text-center">Pictures</legend>
                        <div class="row ba mycard pad">
                            <div class="col-md-6">
                                <input type="file" name="p1" id="">
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="p2" id="">
                            </div>
                            <br><br>
                            <div class="col-md-6">
                                <input type="file" name="p3" id="">
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="p4" id="">
                            </div>
                        </div>
                    </fieldset>

                    <div class="col-md-12" style="margin-bottom : 30px;">
                        <input type="submit" value="Submit" class="float-right btn btn-success" name="" id="">
                    </div>
                </form>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center"> © 2019 BinaryMind </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>
</body>

</html>