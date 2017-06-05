<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body>
<?php echo form_open('welcome/tambah'); ?>
<table>
	<tr>
		<th>Kode Buku</th>
		<td><input type="text" name="kode"></td>
	</tr>
	<tr>
		<th>judul</th>
		<td><input type="text" name="judul"></td>
	</tr>
	<tr>
		<th>penulis</th>
		<td><input type="text" name="penulis"></td>
	</tr>
	<tr>
		<th>penerbit</th>
		<td><input type="text" name="penerbit"></td>
	</tr>
	<tr>
		<th>harga</th>
		<td><input type="text" name="harga"></td>
	</tr>
	<tr>
		<th></th>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>