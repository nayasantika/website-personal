<?php
	include "koneksi.php";
	
	$nik = $_GET['id'];
	$sql = "DELETE FROM karyawan WHERE nik='$nik'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:datakaryawan.php');
	}
	else
	{
	echo "Hapus Karyawan Gagal";
	}
?>