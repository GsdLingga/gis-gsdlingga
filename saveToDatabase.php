<?php
include_once "koneksi.php";

class usr{}

$lat = $_POST["lat"];
$lng = $_POST["lng"];
$zoom = $_POST["zoom"];

    $query = mysqli_query($con, "INSERT INTO tb_marker(lat, lng, zoom) VALUES('".$lat."', '".$lng."', '".$zoom."')");

    	if ($query){
    		$response = new usr();
    		$response->success = 1;
    		$response->message = "Tambah Marker berhasil.";
    		die(json_encode($response));

    	} else {
    		$response = new usr();
    		$response->success = 0;
    		$response->message = "Gagal Menyimpan Marker";
    		die(json_encode($response));
    	}
    	

mysqli_close($con);
?>