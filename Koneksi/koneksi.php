<?php 
$koneksi = mysqli_connect("localhost","root","","db_Sd");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
else{
	echo "berhasil";
}
 ?>
