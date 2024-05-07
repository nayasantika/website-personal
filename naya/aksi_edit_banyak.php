<?php
	include "koneksi.php";
	$no_nota=$_POST['no_nota'];
	$kode_obat=$_POST['kode_obat'];
	$banyak=$_POST['banyak'];
	
	$sql2= "UPDATE banyak SET no_nota='$no_nota', kode_obat='$kode_obat', banyak='$banyak' WHERE no_nota='$no_nota'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:databanyak.php');
	}
	else
	{
	echo "Edit KARYAWAN gagal --> <a href='tambahbanyak.php'>KEMBALI";
	}
?>	