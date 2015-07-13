<?php
	Print "Test";
	
	$data = json_decode(file_get_contents("php://input"), TRUE);

	// $code = $data->message;

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "barcode";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}


	$sql = "INSERT INTO test (nama_kantor) SELECT kantor.nama_kantor FROM kantor WHERE kantor.kode_kantor = '".$data['message']."';";
	// $sql = "INSERT INTO test (nama_kantor) VALUES ('".$data['message']."');";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);


/*	$data = json_decode(file_get_contents("php://input"), true);
	
	echo "$data";
	// $data = file_get_contents("php://input");
	// Print $data;
	// $code = $data->message;
	// $code = $data->msg;

    // $data               = file_get_contents("php://input");
    // $dataJsonDecode     = json_decode($data);
    // $message            = $dataJsonDecode->message;
    // echo $message; 
	mysql_connect("localhost", "root", "") or die(mysql_error()); 
	mysql_select_db("barcode") or die(mysql_error()); 
	mysql_query("INSERT INTO test (nama_kantor) VALUES ('K1')");
	// mysql_query("INSERT INTO test (nama_kantor) VALUES (SELECT nama_kantor FROM kantor WHERE kode_kantor = '$code')"); 
*/	Print "Your information has been successfully added to the database."; 

?>