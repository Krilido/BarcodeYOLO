<?php
//mulai proses tambah data

//cek dulu untuk klik tombol

if(isset($_POST['tambahfilm'])){

	include('../koneksi.php');
	include('akses.php');
	$kodefilm = $_POST['kodefilm'];
	$namafilm = $_POST['namafilm'];
	$hargatiket = $_POST['hargatiket'];
	$batastayang = $_POST['batastayang'];
	$sinopsis = $_POST['sinopsis'];

	list($m,$d,$y)=explode('/', $batastayang);
	
	$query =  "INSERT INTO DAFTAR_FILM VALUES( '".$kodefilm."', 
											'".$namafilm."', 
											".$hargatiket.", 
											TO_DATE('".$batastayang."', 'yyyy-mm-dd' ),
											'".$sinopsis."') ";

	$stid = oci_parse($conn, $query) or die('statement error');
	
	$check = oci_execute($stid) or die ('execute error');


		if($check){
			echo '<script language="javascript">alert("[SUCCESS] Film berhasil ditambahkan!"); document.location="lihatfilm.php";</script>';	//membuat Link untuk kembali ke halaman tambah
		}
		else {
			echo '<script language="javascript">alert("[ERROR] Film gagal ditambahkan!"); document.location="lihatfilm.php";</script>';	//membuat Link untuk kembali ke halaman tambah
		}

}

else{	//jika tidak terdeteksi tombol tambah di klik
 
//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
 
}
?>