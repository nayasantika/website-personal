<?php
	include "koneksi.php";
	
	$kode_obat = $_GET['id'];
	$sql = "DELETE FROM obat WHERE kode_obat='$kode_obat'";
	$query = mysqli_query($db_link,$sql);
	if($query)
	{
	header('location:dataobat.php');
	}
	else
	{
	echo "Hapus Obat Gagal";
	}
?>