<?php
    session_start();
    include "koneksi.php";
    if(!isset($_SESSION['username'])){
        echo "Anda belum login";
        header("location: login.html");
    }
    if($_SESSION['level']!=2){
        echo "Anda belum menjadi member, silahkan daftar";
    }
    $id = $_SESSION["id_member"];
    $query = "SELECT * FROM member WHERE id_member='$id'";
    $hasil = mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trainet | Lifes simple way!</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Trainet™</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <!--<div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>User</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a></li>
                    <li><a href="profile.php"><i class="fa fa-user"></i> Profile </a></li>
                    <li><a href="sendmessage.php"><i class="fa fa-envelope-o"></i> Notification & Message </a></li>
                  <li><a href="categories.php"><i class="fa fa-desktop"></i> Categories </a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- top navigation -->
        <!--<div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Profile</h2>
                    <!--<ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_content">  
                    <br />
                    <form action="insert.php" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="col-md-10 col-sm-10 col-xs-10">
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-3 col-xs-12" for="first-name">First Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="hidden" name="id_member" value="<?php echo $_SESSION["id_member"] ?>">
                          <input type="text" id="first-name" value="<?php echo $_SESSION["firstname"]; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label control-label col-md-2 col-sm-3 col-xs-12" for="last-name">Last Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" value="<?php echo $_SESSION["lastname"]; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="email" class="form-control col-md-7 col-xs-12" type="email" name="email" value="<?php echo $_SESSION["email"]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Gender</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="gender" class="form-control col-md-7 col-xs-12" type="text" name="gender" value="<?php echo $_SESSION["gender"]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="address" class="form-control col-md-7 col-xs-12" type="text" name="address" value="<?php echo $_SESSION["address"]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Phone</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="phone" class="form-control col-md-7 col-xs-12" type="text" name="phone" value="<?php echo $_SESSION["handphone"]; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-2 col-sm-3 col-xs-12">Password <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" class="form-control col-md-7 col-xs-12" type="password" name="password" value="<?php echo $_SESSION["password"]; ?>">
                        </div>
                      </div>
                        </div>
                        <div class="col-md-2">
                        <div class="col-md-12 col-sm-12 col-xs-12 pull-right">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="images/picture.jpg" alt="Avatar" title="Change the avatar">
                            <br>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="button">Change Photo</button>
                                </div>
                            </div>
                        </div>
                      </div> 
                      </div>
                        </div>
                        <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <!--Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>-->
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="../vendors/raphael/raphael.min.js"></script>
    <script src="../vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>