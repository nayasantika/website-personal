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
	<h2><center>TAMBAH DATA PEMBELI</h2>
		<center><form action='aksi_tambah_pembeli.php' method='POST'>
	<table border="0">
	<tr><td>NO PEMBELI</td>
	<td><input type='text' name='no_pembeli' id="no_pembeli" /></td>
	</tr>
	<tr>
	<td>NAMA</td>
	<td><input type='text' name='nama' id="nama" /></td>
	</tr>
	<tr>
	<td>TOTAL</td>
	<td><input type='text' name='total' id="total" /></td>
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
		<a href="datapembeli.php"><input type='button' value='batal' />
		</a></td></tr>
	</table>
</form>
</body>
</html>