<?php 
$server = "localhost";
$user = "id21030942_user";
$password = "Ngikngok2023!";
$nama_database = "id21030942_appes"

$koneksi=mysqli_connect("localhost","root","","appes") or die(mysql_error());

function getStatus($status)
{
	$result = '';
	switch ($status) {
		case 0:
			$result = "Belum";
			break;
		
		case 1:
			$result = "Selesai";
			break;
		case 2:
			$result = "Batal";
			break;
	}
	return $result;
}


?>