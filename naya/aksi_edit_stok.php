<?php
	include "koneksi.php";
	$kode_stok=$_POST['kode_stok'];
	$stok=$_POST['stok'];
	$harga=$_POST['harga'];
	
	$sql2= "UPDATE stok SET kode_stok='$kode_stok', stok='$stok', harga='$harga' WHERE kode_stok='$kode_stok'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:datastok.php');
	}
	else
	{
	echo "Edit STOK gagal --> <a href='tambahstok.php'>KEMBALI";
	}
?>	