<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<?php echo form_open('welcome/edit/'.$dt->kode_buku);?>
<table>
	<tr>
		<th>Kode Buku</th>
		<td><input type="text" name="kode" value="<?php echo $dt->kode_buku; ?>"></td>
	</tr>
	<tr>
		<th>judul</th>
		<td><input type="text" name="judul" value="<?php echo $dt->judul; ?>"></td>
	</tr>
	<tr>
		<th>penulis</th>
		<td><input type="text" name="penulis" value="<?php echo $dt->penulis; ?>"></td>
	</tr>
	<tr>
		<th>penerbit</th>
		<td><input type="text" name="penerbit" value="<?php echo $dt->penerbit; ?>"></td>
	</tr>
	<tr>
		<th>harga</th>
		<td><input type="text" name="harga" value="<?php echo $dt->harga; ?>"></td>
	</tr>
	<tr>
		<th></th>
		<td><input type="submit" name="submit" value="Update"></td>
	</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>