<!DOCTYPE html>
<?php

?>
<html lang="en">
<head>

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
<link id="base-style-responsive" href="css/style-responsive.css" \rel="stylesheet">
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
        <a class="brand" href="index.html"></a>

        <!-- start: Header Menu -->
        
        <div class="nav-no-collapse header-nav">
            <ul class="nav pull-right">
            
            
                <li> <!-- untuk yang logo bengkel -->
                    <a class="btn" href="#">
                        <i class="halflings-icon white wrench"></i>
                    </a>
                </li>
                <!-- start: User Dropdown -->
                <li class="dropdown">
                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="halflings-icon white user"></i> <?php echo $_SESSION['admin']; ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-title">
                            <span>Account Settings</span>
                        </li>
                        <li><a href="index.php"><i class="halflings-icon off"></i> Logout</a></li>
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
                <li><a href="index.php"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>	
                
                
                
              <!--  <li><a href="messages.html"><i class="icon-envelope"></i><span class="hidden-tablet"> Messages</span></a></li> 
                <li><a href="tasks.html"><i class="icon-tasks"></i><span class="hidden-tablet"> Tasks</span></a></li>
                <li><a href="ui.html"><i class="icon-eye-open"></i><span class="hidden-tablet"> UI Features</span></a></li>
                <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet"> Widgets</span></a></li> 
                <li>
                    <a class="dropmenu" href="#"><i class="icon-film"></i><span class="hidden-tablet"> Film</span></a>	
                </li>
               
                <li>
                    <a class="dropmenu" href="#"><i class="icon-calendar"></i><span class="hidden-tablet"> Jadwal</span></a>
                    <ul>
                        <li><a class="submenu" href="tambahjadwal.php"><i class="icon-plus-sign"></i><span class="hidden-tablet">  Tambah Jadwal </span></a></li>
                        <li><a class="submenu" href="cekjadwal.php"><i class="icon-tasks"></i><span class="hidden-tablet">  Lihat Jadwal </span></a></li>
                    </ul>	
                </li>
                                 <li>
                    <a class="dropmenu" href="#"><i class="icon-user"></i><span class="hidden-tablet"> Member</span></a>
                    <ul>
                        <li><a class="submenu" href="tambahjadwal.php"><i class="icon-plus-sign"></i><span class="hidden-tablet">  Tambah Member </span></a></li>
                        <li><a class="submenu" href="cekjadwal.php"><i class="icon-eye-open"></i><span class="hidden-tablet">  Lihat Member </span></a></li>
                    </ul>	
                </li>

                <li><a href="cektransaksi.php"><i class="icon-money"></i><span class="hidden-tablet"> Transaksi</span></a></li>

                  <li>
                    <a class="dropmenu" href="#"><i class="icon-bar-chart"></i><span class="hidden-tablet"> Statistik & Report </span></a>
                    <ul>
                        <li><a class="submenu" href="film_laris.php"><i class="icon-thumbs-up"></i><span class="hidden-tablet">  Film Terlaris   & Statistik</span></a></li>
                        <li><a class="submenu" href="income_bulan.php"><i class="icon-download-alt"></i><span class="hidden-tablet">  Income </span></a></li>
                        <li><a class="submenu" href="rep_tiket_bulan.php"><i class="icon-list-ul"></i><span class="hidden-tablet">  Penjualan Tiket Bulanan </span></a></li>
                    </ul>   
                </li>
                
                <li><a href="form.html"><i class="icon-edit"></i><span class="hidden-tablet"> Forms</span></a></li>
                <li><a href="chart.html"><i class="icon-list-alt"></i><span class="hidden-tablet"> Charts</span></a></li>
                <li><a href="typography.html"><i class="icon-font"></i><span class="hidden-tablet"> Typography</span></a></li>
                <li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                <li><a href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                <li><a href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li> -->
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


    
    <!--start content-->
    
        <div class="row-fluid">
				<div class="box span12">
					<div class="box-header">
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
			<th>No</th> 
			<th>Nama Kantor</th> 
		</tr> 
        </thead>
        <tbody>
    <?php
                //include file koneksi ke database
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

            $sql = "SELECT * FROM test";           

            // $sql = "SELECT id, firstname, lastname FROM MyGuests";
            $result = mysqli_query($conn, $sql);
/*
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                }
            } else {
                echo "0 results";
            }

*/
            // $result = mysqli_query($konek, $query);
            
            // echo '<table width="600" border="0">';
            
            while($hasil = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '<td>'.$id_test = $hasil['id_test'].'</td>';
                echo '<td>'.$nama_kantor = $hasil['nama_kantor'].'</td>';
                echo '</tr>';
            }
                   
                //buat perulangan
            echo'</tbody>';

            ?>	
            
        </table>
	</center>	
                        <!--end content-->
    </div>
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
