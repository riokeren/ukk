<?php
session_start();

include "koneksi.php";

$Username = $_POST["User"];
$Password = $_POST["Pass"];

$sql = "select * from petugas where username='".$Username."' and password='".$Password."'";
$hasil = mysqli_query ($kon,$sql);

$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["nama"]=$row["nama_petugas"];
		

		header("Location:../utama/index.php");
		
	}else {
		echo "Username atau password salah <br><a href='../index.php'>Kembali</a>";
	}
?>