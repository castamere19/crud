<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>style/css/jquery.dataTables.min.css"/>
 
<script type="text/javascript" src="<?php echo base_url()?>style/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>style/js/jquery.dataTables.min.js"></script>
</head>
<a href="<?php echo base_url()?>welcome/tambahform">Tambah Data</a>
<body>
	<table border="1" id="dtb">
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Buku</th>
				<th>Judul</th>
				<th>Penulis</th>
				<th>Penerbit</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
		<?php $no=1; ?>
		<?php foreach ($isinya as $key) {?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $key['kode_buku']; ?></td>
				<td><?php echo $key['judul']; ?></td>
				<td><?php echo $key['penulis']; ?></td>
				<td><?php echo $key['penerbit']; ?></td>
				<td><?php echo $key['harga']; ?></td>
				<td><a href="<?php echo site_url('welcome/hapus/'.$key['kode_buku'])?>">Hapus</a> || <a href="<?php echo site_url('welcome/editform/'.$key['kode_buku']) ?>">Edit</a></td>
			</tr>
		<?php } ?>
			
		</tbody>
	</table>
</body>
<script>
	$(document).ready(function(){
    $('#dtb').DataTable();
});
</script>
</html>