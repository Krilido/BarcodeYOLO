<?php
	header('Access-Control-Allow-Origin: *');	
	
	$data = json_decode(file_get_contents("php://input"), TRUE);
	

	// $code = $data->message;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "barcode";



	function getDistanceBetween($latitude1, $longitude1, $latitude2, $longitude2) 
			{ 
				$rad = M_PI / 180;
				return acos(sin($latitude2*$rad)*sin($latitude1*$rad)+cos($latitude2*$rad)*cos($latitude1*$rad)*cos($longitude2*$rad - $longitude1*$rad)) * 6371;
			}

	

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	if($data['option'] == "login"){
		$cari = "SELECT * FROM `pegawai` WHERE `nik` = '".$data['nik']."' AND `password` = '".$data['password']."' AND `imei` = '".$data['imei']."';";
		// $arr =  array('status' => $cari );
		// echo json_encode($arr);
		$run_user = mysqli_query($conn, $cari);
		$check_user = mysqli_num_rows($run_user);
		if ($check_user>0) {
			$lelah =  array('status' => '0000' );
			echo json_encode($lelah);
	    	// echo json_encode("0000");
		} 
		else {
			$arr =  array('status' => '212' );
			echo json_encode($arr);
		}
	}

	if($data['option'] == "daftar"){
		$cari = "SELECT * FROM `pegawai` WHERE `imei` = '".$data['imei']."';";
		// $arr =  array('status' => $cari );
		// echo json_encode($arr);
		$run_user = mysqli_query($conn, $cari);
		$check_user = mysqli_num_rows($run_user);
		if($check_user>0){
			$arr =  array('status' => '313' );
			echo json_encode($arr);
		}
		else{
			$cari = " INSERT INTO pegawai VALUES ('".$data['NIK']."','".$data['nama']."', '".$data['password']."','".$data['jabatan']."','".$data['alamat']."','".$data['imei']."' );";
			if (mysqli_query($conn, $cari)) {
				$arr =  array('status' => '0000' );
				echo json_encode($arr);
		    	// echo json_encode("0000");
			} 
			else {
				$arr =  array('status' => '212' );
				echo json_encode($arr);
			}
		}
		
	}

	if($data['option'] == "barcode"){
		$lat = doubleval($data['lat']);
		
		$lng = doubleval($data['lng']);

		$run = "SELECT kantor.lat_kantor, kantor.lng_kantor FROM kantor where kantor.kode_kantor = '".$data['message']."'; ";
		$result = mysqli_query($conn, $run);		
		$hasil = mysqli_fetch_array($result);
        $lat_kantor = $hasil['lat_kantor'];
        $lng_kantor = $hasil['lng_kantor'];
        
        $jarak = getDistanceBetween($lat,$lng,$lat_kantor,$lng_kantor);

		$sql = "INSERT INTO test (kode_kantor,lat,lng,jarak, imei_masuk) VALUES ('".$data['message']."','".$data['lat']."','".$data['lng']."', $jarak ,'".$data['imei']."' );";
		if (mysqli_query($conn, $sql)) {
			$arr =  array('status' => '0000' );
			echo json_encode($arr);
	    	// echo json_encode("0000");
		} 
		else {
			$arr =  array('status' => '212' );
			echo json_encode($arr);
		}
	}

	


	// $sql = "INSERT INTO test (nama_kantor) VALUES ('".$data['message']."');";


	// $arr =  array('status' => 212 );
	// echo json_encode($arr);

	mysqli_close($conn);



?>