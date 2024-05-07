<?php
	include "koneksi.php";
	$nik=$_POST['nik'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$bagian=$_POST['bagian'];
	
	$sql2= "UPDATE karyawan SET nik='$nik', nama='$nama', alamat='$alamat', bagian='$bagian' WHERE nik='$nik'";
	$query = mysqli_query($db_link,$sql2);
	if($query)
	{
	header('location:datakaryawan.php');
	}
	else
	{
	echo "Edit KARYAWAN gagal --> <a href='tambahkaryawan.php'>KEMBALI";
	}
?>	