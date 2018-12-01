<?php 
function month($a){
    if($a == 1){
        return "JAN";
    }if($a == 2){
        return "FEB";
    }if($a == 3){
        return "MAR";
    }if($a == 4){
        return "APR";
    }if($a == 5){
        return "MAY";
    }if($a == 6){
        return "JUN";
    }if($a == 7){
        return "JUL";
    }if($a == 8){
        return "AUG";
    }if($a == 9){
        return "SEP";
    }if($a == 10){
        return "OCT";
    }if($a == 11){
        return "NOV";
    }if($a == 12){
        return "DEC";
    }
}
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
        <link href="<?php echo base_url() ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url() ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url() ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo base_url() ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

        <!-- bootstrap-progressbar -->
        <link href="<?php echo base_url() ?>/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="<?php echo base_url() ?>/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo base_url() ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo base_url() ?>/build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_url() ?>" class="site_title"><i class="fa fa-paw"></i> <span>Trainet™</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <br />

                        <!-- sidebar menu -->
                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                                <ul class="nav side-menu">
                                    <li><a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i> Home </a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/member"><i class="fa fa-user"></i> Profile </a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/member/messagenotification"><i class="fa fa-envelope-o"></i> Notification & Message </a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/categories"><i class="fa fa-desktop"></i> Categories </a></li>
                                    <li><a href="<?php echo base_url(); ?>index.php/login/logout"><i class="fa fa-sign-out"></i> Logout </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
