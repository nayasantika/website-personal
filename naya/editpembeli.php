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
	<h2><center>EDIT DATA PEMBELI</center></h2>
		<hr />
	<?php
		$no_pembeli=$_GET['id'];
		$sql= "SELECT * FROM pembeli WHERE no_pembeli='$no_pembeli'";
		$query=mysqli_query($db_link,$sql);
		$data=mysqli_fetch_array($query);
	?>
	<center><form action='aksi_edit_pembeli.php?id=<?php echo "no_pembeli"; ?>' method='POST'>
		<table border="0">
		<tr>
			<td>NO PEMBELI</td>
			<td><input name='no_pembeli' type='text' id="no_pembeli" value="<?php echo $data['no_pembeli'] ?>" /></td>
		</tr>
		<tr>
			<td>NAMA</td>
			<td><input name='nama' type='text' id="nama" value="<?php echo $data['nama'] ?>" /></td>
		</tr>
		<tr>
			<td>TOTAL</td>
			<td><input name='total' type='text' id="total" value="<?php echo $data['total'] ?>" /></td>
		</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="simpan" />
			<a href="../pembeli/datapembeli.php"><input type="button" value="batal" /></a></td>
			</tr>
		</table>
	</form>
</body>
</html>
