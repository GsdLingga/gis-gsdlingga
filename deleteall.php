<?php
include_once "koneksi.php";

class usr{}

$query = mysqli_query($con, "DELETE FROM tb_marker ");

    if ($query){
        $response = new usr();
        $response->success = 1;
        $response->message = "Delete Semua Marker berhasil.";
        die(json_encode($response));

    } else {
        $response = new usr();
        $response->success = 0;
        $response->message = "Gagal Delete Semua Marker";
        die(json_encode($response));
    }
    	

mysqli_close($con);
?>