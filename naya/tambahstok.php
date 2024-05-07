<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<style>
input[type="button"] {
padding: 10px 20px;
background-color: #CC99CC;
border: none;
color: white;
text-align: center;
text-decoretion: none;
display: inline-block;
font-size: 16px;
margin-bottom: 10px;
cursor: pointex;
border-radius: 50px;
}
input[type="submit"] {
padding: 10px 20px;
background-color: #CC99CC;
border: none;
color: white;
text-align: center;
text-decoretion: none;
display: inline-block;
font-size: 16px;
margin-bottom: 10px;
cursor: pointex;
border-radius: 50px;
}
</style>
</head>
<body background="bg1.jpg">
	<h2><center>TAMBAH DATA STOK</h2>
		<center><form action='aksi_tambah_stok.php' method='POST'>
	<table border="0">
	<tr><td>KODE STOK</td>
	<td><input type='text' name='kode_stok' id="kode_stok" /></td>
	</tr>
	<tr>
	<td>STOK</td>
	<td><input type='text' name='stok' id="stok" /></td>
	</tr>
	<tr>
	<td>HARGA</td>
	<td><input type='text' name='harga' id="harga" /></td>
	</tr>
		<tr>
		<td></td>
		<td>
			<tr>
		<td></td>
		<td>
			<tr>
		<td></td>
		<td>
		<input type='submit' value='simpan' />
		<a href="datastok.php"><input type='button' value='batal' />
		</a></td></tr>
	</table>
</form>
</body>
</html>