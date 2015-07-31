<!DOCTYPE html>
<?php
include ('akses.php');
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
<!-- script for calendar-->
<!-- start: Meta -->
<meta charset="utf-8">
<title>Admin Area</title>
<meta name="description" content="Bootstrap Metro Dashboard">
<meta name="author" content="Dennis Ji">
<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
<!-- end: Meta -->

<!-- start: Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- end: Mobile Specific -->

<!-- start: CSS -->
<link id="bootstrap-style" href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link id="base-style" href="css/style.css" rel="stylesheet">
<link id="base-style-responsive" href="css/style-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
<!-- end: CSS -->

<!-- start: Favicon -->
<link rel="shortcut icon" href="img/favicon.ico">
<!-- end: Favicon -->	

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
                        <i class="halflings-icon white user"></i> <?php echo $_SESSION['admin']; ?>
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

    <div id="sidebar-left" class="span2">
        <div class="nav-collapse sidebar-nav">
            <ul class="nav nav-tabs nav-stacked main-menu">
                <!-- start sidebar -->
                <li><a href="report.php"><i class="icon-home"></i><span class="hidden-tablet"> Report</span></a></li>   
                <li>
                    <a class="dropmenu" href="#"><i class="icon-film"></i><span class="hidden-tablet"> Pegawai</span></a>
                    <ul>
                        <li><a class="submenu" href="hapuspegawai.php"><i class="icon-remove"></i><span class="hidden-tablet">  Hapus Pegawai </span></a></li>
                        <li><a class="submenu" href="editpegawai.php"><i class="icon-edit"></i><span class="hidden-tablet">  Edit Pegawai </span></a></li>
                        <li><a class="submenu" href="listpegawai.php"><i class="icon-tasks"></i><span class="hidden-tablet">  List Pegawai </span></a></li>
                    </ul>   
                </li>
                 <li>
                    <a class="dropmenu" href="#"><i class="icon-home"></i><span class="hidden-tablet"> Kantor</span></a>
                    <ul>
                        <li><a class="submenu" href="listkantor.php"><i class="icon-tasks"></i><span class="hidden-tablet">  List Kantor </span></a></li>
                        <li><a class="submenu" href="tambahkantor.php"><i class="icon-plus-sign"></i><span class="hidden-tablet">  Tambah Kantor </span></a></li>
                        <li><a class="submenu" href="editkantor.php"><i class="icon-edit"></i><span class="hidden-tablet">  Edit Kantor </span></a></li>
                        <li><a class="submenu" href="hapuskantor.php"><i class="icon-remove"></i><span class="hidden-tablet">  Hapus Kantor </span></a></li>
                    </ul>   
                </li>
                </li>
                <li><a href="cetaklaporan.php"><i class="icon-share"></i><span class="hidden-tablet"> Cetak Laporan</span></a></li>              
            </ul>
        </div>
    </div>
    <!-- end: Main Menu -->

    <noscript>
        <div class="alert alert-block span10">
            <h4 class="alert-heading">Warning!</h4>
            <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
        </div>
    </noscript>

    <!-- start: Content -->
    <div id="content" class="span10">


    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="index.php">Admin</a> 
            <i class="icon-angle-right"></i>
        </li>
        <li><i class="icon-film"></i>
            <a href="">Pegawai</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><i class="icon-remove"></i>
            <a href="hapuspegawai.php">Hapus Pegawai</a></li>
    </ul>
	

    <!-- start: Content -->

            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Hapus Pegawai</h2>
                        <div class="box-icon">
                            <a href="" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    
                    <!--mulai isian form-->
                    
                    <div class="box-content">
                        <form name="proseshapuspegawai" action="hapuspegawai.php" method="post" class="form-horizontal">
                            <fieldset>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">NIK</label>
                                <div class="controls">
                                  <input class="input-xlarge focused" id="focusedInput" type="text" name="nik" required>
                                </div>
                            </div>
                                
                    </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary"  type="submit" name="caripegawai" value="Cari" >Cari</button>
                            <button class="btn"> <a href="hapuspegawai.php"></a>Reset</button>
                         
						</div>
							</fieldset>
                            
	                   </form>
                    
                    </div><!--/span-->
            
                </div><!--/row-->
            
            </div><!--/row-->
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon edit"></i><span class="break"></span>Hapus Pegawai</h2>
                        <div class="box-icon">
                            <a href="" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                            <a href="" class="btn-close"><i class="halflings-icon remove"></i></a>
                        </div>
                    </div>
                    
                    <!--mulai isian form-->
                    <center>
    <h2>Report Harian</h2>
                    <div class="box-icon">
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                        <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                    </div>
                </div>
                <div class="box-content">
    <table class="table" id="#statistikfilm" > 
        <thead>
        <tr> 
            <th>NIK</th> 
            <th>Nama Pegawai</th>
            <th>Alamat Pegawai</th>
            <th>Jabatan</th>
        </tr> 
        </thead>
        <tbody>
    <?php
            
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "barcode";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $keyword= $_POST['nik'];

                    $sql = "SELECT * FROM Pegawai Where nik = '".$keyword."';";                    
                    $result = mysqli_query($conn, $sql);
                    while($hasil = mysqli_fetch_array($result, MYSQLI_BOTH)){
                        echo '<tr>';
                        echo '<td>'.$nik = $hasil['nik'].'</td>';
                        echo '<td>'.$nama_pegawai = $hasil['nama_pegawai'].'</td>';
                        echo '<td>'.$alamat_pegawai = $hasil['alamat_pegawai'].'</td>';
                        echo '<td>'.$jabatan = $hasil['jabatan'].'</td>';
                        echo '</tr>';
                    }
                    
            
                   
                
            echo'</tbody>';

            ?>  
            
        </table>
    </center>   

                    
                                
                    </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary"  type="submit" name="hapuspegawai" value="hapus" >Hapus</button>
                            <button class="btn"> <a href="hapuspegawai.php"></a>Reset</button>
                         
                        </div>
                            </fieldset>
                            
                       </form>
                    
                    </div><!--/span-->
            
                </div><!--/row-->
            
            </div><!--/row-->
    

    </div><!--/.fluid-container-->
    
            <!-- end: Content -->

    </div>



<!-- start: JavaScript -->

<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/jquery-migrate-1.0.0.min.js"></script>

<script src="js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="js/jquery.ui.touch-punch.js"></script>

<script src="js/modernizr.js"></script>

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.cookie.js"></script>

<script src='js/fullcalendar.min.js'></script>

<script src='js/jquery.dataTables.min.js'></script>

<script src="js/excanvas.js"></script>
<script src="js/jquery.flot.js"></script>
<script src="js/jquery.flot.pie.js"></script>
<script src="js/jquery.flot.stack.js"></script>
<script src="js/jquery.flot.resize.min.js"></script>

<script src="js/jquery.chosen.min.js"></script>

<script src="js/jquery.uniform.min.js"></script>

<script src="js/jquery.cleditor.min.js"></script>

<script src="js/jquery.noty.js"></script>

<script src="js/jquery.elfinder.min.js"></script>

<script src="js/jquery.raty.min.js"></script>

<script src="js/jquery.iphone.toggle.js"></script>

<script src="js/jquery.uploadify-3.1.min.js"></script>

<script src="js/jquery.gritter.min.js"></script>

<script src="js/jquery.imagesloaded.js"></script>

<script src="js/jquery.masonry.min.js"></script>

<script src="js/jquery.knob.modified.js"></script>

<script src="js/jquery.sparkline.min.js"></script>

<script src="js/counter.js"></script>

<script src="js/retina.js"></script>

<script src="js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>
