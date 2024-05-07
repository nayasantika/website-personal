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
	<h2><center>TAMBAH DATA BANYAK</h2>
		<center><form action='aksi_tambah_banyak.php' method='POST'>
	<table border="0">
	<tr><td>NO NOTA</td>
	<td><input type='text' name='no_nota' id="no_nota" /></td>
	</tr>
	<tr>
	<td>KODE OBAT</td>
	<td><input type='text' name='kode_obat' id="kode_obat" /></td>
	</tr>
	<tr>
	<td>BANYAK</td>
	<td><input type='text' name='banyak' id="banyak" /></td>
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
		<a href="databanyak.php"><input type='button' value='batal' />
		</a></td></tr>
	</table>
</form>
</body>
</html>