<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui" />
        <title>Foxia - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="<?php echo site_url() ?>assets/images/favicon.ico" />
        <link rel="stylesheet" href="../plugins/morris/morris.css" />
        <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/css/switch.css" type="text/css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/css/dataTable.css" type="text/css">
        <link rel="stylesheet" href="<?php echo site_url() ?>assets/css/dataTableBootstrap.css" type="text/css">
    </head>
    <body class="fixed-left">
        <!-- <div id="preloader">
            <div id="status"><div class="spinner"></div></div>
        </div> -->
        <div id="wrapper">
            <div class="topbar">
                <div class="topbar-left">
                    <a href="index.html" class="logo"><img src="assets/images/logo.png" alt="" height="20" class="logo-large" /> <img src="assets/images/logo-sm.png" alt="" height="22" class="logo-sm" /></a>
                </div>
                <nav class="navbar-custom">
                    <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input" type="search" placeholder="Search" /> <a href="#" class="close-search toggle-search" data-target="#search-wrap"><i class="mdi mdi-close-circle"></i></a>
                        </div>
                    </div>
                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="mdi mdi-bell-outline noti-icon"></i> <!--<span class="badge badge-info badge-pill noti-icon-badge">3</span>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-arrow dropdown-menu-lg">
                                
                                <div class="dropdown-item noti-title"><h5>Notification</h5></div>
                                <div class="slimscroll-noti">
                                    
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item notify-all">View All</a>
                            </div>
                        </li>
                        <!-- User-->
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle" /> <span class="d-none d-md-inline-block ml-1">Donald T. <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>
                            <li>
                                <a href="<?php echo site_url('/dashboard')?>" class="waves-effect"><i class="dripicons-meter"></i> <span>Dashboard</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/packages') ?>" class="waves-effect"><i class="mdi mdi-package-variant"></i><span> Packages</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/wallet') ?>" class="waves-effect"><i class="dripicons-wallet"></i><span> Wallet</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/recharge') ?>" class="waves-effect"><i class="dripicons-calendar"></i><span> Recharge</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/global-constant') ?>" class="waves-effect"><i class="fa fa-globe"></i><span> Global Contacts</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/countries') ?>" class="waves-effect"><i class="dripicons-calendar"></i><span> Countries</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('/account') ?>" class="waves-effect"><i class="mdi mdi-account-key"></i><span> Account</span></a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="clearfix"></div>
                </div>
                
            </div>