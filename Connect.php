<?php   
    $ketnoi['host'] = 'localhost'; 
    $ketnoi['dbname'] = 'qlpb'; 
    $ketnoi['username'] = 'root'; 
    $ketnoi['password'] = ''; 

    $conn = mysqli_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}","{$ketnoi['dbname']}")
    or
        die("Không thể kết nối database");
	mysqli_query($conn,"SET character_set_results=utf8");

?>