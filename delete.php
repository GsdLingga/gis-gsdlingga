<?php
include_once "koneksi.php";

class usr{}

$id = $_GET["id"];

$query = mysqli_query($con, "DELETE FROM tb_marker WHERE tb_marker.id = '".$id."'");

    if ($query){
        $response = new usr();
        $response->success = 1;
        $response->message = "Delete Merker berhasil.";
        die(json_encode($response));

    } else {
        $response = new usr();
        $response->success = 0;
        $response->message = "Gagal Delete Merker";
        die(json_encode($response));
    }
    	

mysqli_close($con);
?>