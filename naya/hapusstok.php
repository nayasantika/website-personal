<?php
	include "koneksi.php";
	
	$kode_stok = $_GET['id'];
	$sql = "DELETE FROM stok WHERE kode_stok='$kode_stok'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:datastok.php');
	}
	else
	{
	echo "Hapus Stok Gagal";
	}
?>