<?php
include_once "koneksi.php";

class usr{}

    $query 	= mysqli_query($con, "SELECT tb_marker.id, tb_marker.lat, tb_marker.lng, tb_marker.zoom FROM tb_marker");
		
    $json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		array_push($json, $row);
    }
	
	echo json_encode($json);

mysqli_close($con);
?>