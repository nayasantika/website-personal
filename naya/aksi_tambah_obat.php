<?php
	include "koneksi.php";
	$kode_obat=$_POST['kode_obat'];
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	$keluhan=$_POST['keluhan'];
	$sql = "insert into obat(kode_obat,nama,jenis,keluhan)
	values('$kode_obat','$nama','$jenis','$keluhan')";
	$query=mysqli_query($db_link,$sql);
	if($query)
	{
		header('location:dataobat.php');
	}
	else
	{
	echo"Gagal Disimpan --> <a href='tambahobat.php'>Kembali Ke Input Data";
	}
?>
	