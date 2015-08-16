<!DOCTYPE html>
<?php

date_default_timezone_set('Asia/Jakarta');
$hari=date('w');
$tgl =date('d');
$bln =date('m');
$thn =date('Y');
$jam = date('H');
$menit = date('i');
switch($hari){      
case 0 : {
            $hari='Minggu';
        }break;
case 1 : {
            $hari='Senin';
        }break;
case 2 : {
            $hari='Selasa';
        }break;
case 3 : {
            $hari='Rabu';
        }break;
case 4 : {
            $hari='Kamis';
        }break;
case 5 : {
            $hari="Jum'at";
        }break;
case 6 : {
            $hari='Sabtu';
        }break;
default: {
            $hari='UnKnown';
        }break;
}

switch($bln){       
case 1 : {
            $bln='Januari';
        }break;
case 2 : {
            $bln='Februari';
        }break;
case 3 : {
            $bln='Maret';
        }break;
case 4 : {
            $bln='April';
        }break;
case 5 : {
            $bln='Mei';
        }break;
case 6 : {
            $bln="Juni";
        }break;
case 7 : {
            $bln='Juli';
        }break;
case 8 : {
            $bln='Agustus';
        }break;
case 9 : {
            $bln='September';
        }break;
case 10 : {
            $bln='Oktober';
        }break;     
case 11 : {
            $bln='November';
        }break;
case 12 : {
            $bln='Desember';
        }break;
default: {
            $bln='UnKnown';
        }break;
}
$sekarang=$hari.",  ".$tgl." ".$bln." ".$thn." pukul ".$jam.":".$menit;
?>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="<?php echo base_url() ?>assets/css/style-responsive.css" rel="stylesheet">
   
    <link href="<?php echo base_url() ?>assets/jtable/jtable/themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url() ?>assets/jtable/jtable/themes/metro/blue/jtable.css" rel="stylesheet" type="text/css" />
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'> -->
    <!-- end: CSS -->
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<link id="ie-style" href="css/ie.css" rel="stylesheet">
<![endif]-->

<!--[if IE 9]>
<link id="ie9style" href="css/ie9.css" rel="stylesheet">
<![endif]-->

<!-- start: Favicon -->

    <!-- <link href="<?php echo base_url() ?>/assets/jtable\themes\metro\blue" rel="stylesheet" type="text/css" /> -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-ui-1.10.0.custom.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/jtable/jtable/jquery.jtable.js" type="text/javascript"></script>            
    
    <!-- end: Favicon -->
    
    
    
    <style type="text/css">
            #sortedtable thead th {
                color: #00f;
                font-weight: bold;
                text-decoration: underline;
    }
    </style>
</head>

<body>
    <!-- start: Header -->
    <div class="navbar">
    <div class="navbar-inner">
    <div class="container-fluid">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <a class="brand" href="index.html"><span><?php echo $sekarang; ?> </span></a>

        <!-- start: Header Menu -->
        
        <div class="nav-no-collapse header-nav">
            <ul class="nav pull-right">
            
            
                <li> <!-- untuk yang logo bengkel -->
                    <a class="btn" href="">
                        <i class="halflings-icon white wrench"></i>
                    </a>
                </li>
                <!-- start: User Dropdown -->
                <li class="dropdown">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="">
                        <i class="halflings-icon white user"></i> 
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-title">
                            <span>Account Settings</span>
                        </li>
                        <li><a href=""><i class="halflings-icon user"></i> Profile</a></li>
                        <li><a href="logout.php"><i class="halflings-icon off"></i> Logout</a></li>
                    </ul>
                </li>
                <!-- end: User Dropdown -->
            </ul>
        </div>
        <!-- end: Header Menu -->

    </div>
</div>
</div>
    <!-- start: Header -->

    <div class="container-fluid-full">
        <div class="row-fluid">

            <!-- start: Main Menu -->
            <div id="sidebar-left" class="span2">
                <div class="nav-collapse sidebar-nav">
                    <ul class="nav nav-tabs nav-stacked main-menu">
                        <!-- start sidebar -->
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-home"></i><span class="hidden-tablet"> Report</span></a>
                            <ul>
                                <li><a class="submenu" href="<?=site_url("report")?>"><i class="icon-tasks"></i><span class="hidden-tablet">  Report Hari ini</span></a></li>
                                <li><a class="submenu" href="<?=site_url("carireport")?>"><i class="icon-tasks"></i><span class="hidden-tablet">  Report Per Sales </span></a></li>
                                <li><a class="submenu" href="<?=site_url("carikantor")?>"><i class="icon-tasks"></i><span class="hidden-tablet">  Report Per Toko </span></a></li>
                            </ul>   
                        </li>

                        <li>
                            <a class="dropmenu" href="#"><i class="icon-film"></i><span class="hidden-tablet"> Pegawai</span></a>
                            <ul>
                                <li><a class="submenu" href="<?=base_url()?>index.php/pegawai"><i class="icon-tasks"></i><span class="hidden-tablet">  Pegawai Aktif </span></a></li>
                                <li><a class="submenu" href="<?=base_url()?>index.php/pegawainonaktif"><i class="icon-remove"></i><span class="hidden-tablet">  Pegawai Non-Aktif </span></a></li>
                            </ul>   
                        </li>
                         <li>
                            <a class="dropmenu" href="#"><i class="icon-home"></i><span class="hidden-tablet"> Kantor</span></a>
                            <ul>
                                <li><a class="submenu" href="<?=base_url()?>index.php/kantor"><i class="icon-tasks"></i><span class="hidden-tablet">  Kantor Aktif </span></a></li>
                                <li><a class="submenu" href="<?=base_url()?>index.php/kantornonaktif"><i class="icon-remove"></i><span class="hidden-tablet">  Kantor Non-Aktif </span></a></li>
                            </ul>   
                        </li>
                        <li>
                            <a class="dropmenu" href="#"><i class="icon-home"></i><span class="hidden-tablet"> Pelangaran</span></a>
                            <ul>
                                <li><a class="submenu" href="<?=base_url()?>index.php/indikasi"><i class="icon-tasks"></i><span class="hidden-tablet">  Indikasi Pelanggaran </span></a></li>
                                <li><a class="submenu" href="<?=base_url()?>index.php/pelanggaran"><i class="icon-remove"></i><span class="hidden-tablet">  Pelanggaran  </span></a></li>
                            </ul>   
                        </li>
                    </ul>
                </div>
            </div>