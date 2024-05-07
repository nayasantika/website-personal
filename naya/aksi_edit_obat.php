<?php
	include "koneksi.php";
	$kode_obat=$_POST['kode_obat'];
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	$keluhan=$_POST['keluhan'];
	
	$sql2= "UPDATE obat SET kode_obat='$kode_obat', nama='$nama', jenis='$jenis', keluhan='$keluhan' WHERE kode_obat='$kode_obat'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:dataobat.php');
	}
	else
	{
	echo "Edit OBAT gagal --> <a href='tambahobat.php'>KEMBALI";
	}
?>	