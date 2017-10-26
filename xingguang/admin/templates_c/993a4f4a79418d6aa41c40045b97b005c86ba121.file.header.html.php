<?php /* Smarty version Smarty-3.1.9, created on 2017-09-15 10:04:52
         compiled from ".\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:2983359bb354448f051-15158926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '993a4f4a79418d6aa41c40045b97b005c86ba121' => 
    array (
      0 => '.\\templates\\header.html',
      1 => 1505014708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2983359bb354448f051-15158926',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.9',
  'unifunc' => 'content_59bb354453c8a0_63875777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59bb354453c8a0_63875777')) {function content_59bb354453c8a0_63875777($_smarty_tpl) {?><!DOCTYPE html>

<!--

Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1

Version: 1.3

Author: KeenThemes

Website: http://www.keenthemes.com/preview/?theme=metronic

Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469

-->

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

    <meta charset="utf-8" />

    <title>星光装饰后台</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />

    <meta content="" name="author" />

    <!-- BEGIN GLOBAL MANDATORY STYLES -->

    <link href="<?php echo @TP;?>
media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/style-metro.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/style.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

    <link href="<?php echo @TP;?>
media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="<?php echo @TP;?>
media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/daterangepicker.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo @TP;?>
media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>

    <link href="<?php echo @TP;?>
media/css/jqvmap.css" rel="stylesheet" type="text/css" media="screen"/>

    <link href="<?php echo @TP;?>
media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- END PAGE LEVEL STYLES -->

    <link rel="shortcut icon" href="<?php echo @TP;?>
media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

<!-- BEGIN HEADER -->

<div class="header navbar navbar-inverse navbar-fixed-top">

    <!-- BEGIN TOP NAVIGATION BAR -->

    <div class="navbar-inner">

        <div class="container-fluid">

            <!-- BEGIN LOGO -->

            <a class="brand" href="../index.php" target="_blank">

                星光装饰

            </a>

            <!-- END LOGO -->

            <!-- BEGIN RESPONSIVE MENU TOGGLER -->

            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

                <img src="<?php echo @TP;?>
media/image/menu-toggler.png" alt="" />

            </a>

            <!-- END RESPONSIVE MENU TOGGLER -->

            <!-- BEGIN TOP NAVIGATION MENU -->

            <ul class="nav pull-right">

                <!-- BEGIN NOTIFICATION DROPDOWN -->



                <!-- END NOTIFICATION DROPDOWN -->

                <!-- BEGIN INBOX DROPDOWN -->



                <!-- END INBOX DROPDOWN -->

                <!-- BEGIN TODO DROPDOWN -->



                <!-- END TODO DROPDOWN -->

                <!-- BEGIN USER LOGIN DROPDOWN -->

                <li class="dropdown user">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img alt="" src="<?php echo (($tmp = @$_SESSION['avartar'])===null||$tmp==='' ? 'templates/img/3.jpeg' : $tmp);?>
" width="29px" height="29px"/>

                        <span class="username"><?php echo htmlspecialchars($_SESSION['username']);?>
</span>

                        <i class="icon-angle-down"></i>

                    </a>

                    <ul class="dropdown-menu">

                        <!--<li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>

                        <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>

                        <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>

                        <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>

                        <li class="divider"></li>

                        <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>-->

                        <li><a href="<?php echo U('users','loginOut');?>
"><i class="icon-key"></i>注销</a></li>

                    </ul>

                </li>

                <!-- END USER LOGIN DROPDOWN -->

            </ul>

            <!-- END TOP NAVIGATION MENU -->

        </div>

    </div>

    <!-- END TOP NAVIGATION BAR -->

</div>

<!-- END HEADER --><?php }} ?>