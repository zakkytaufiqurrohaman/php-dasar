<?php 

	require 'function.php';
	$data=query("SELECT * FROM barang");



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>php dasar</title>
</head>
<body>
	<a href="tambah.php"> tambah data</a>
	<table border="2"> 
		
		<tr>
			<td>nomor</td>
			<td>judul</td>
			<td>aksi</td>
		</tr>

		
		<?php foreach ($data as $key) : ?>
			<tr>
				<td> <a href="edit.php?id=<?=$key['id']; ?>">edit</a>
				 <a href="hapus.php?id=<?=$key['id']; ?>" onclick="return confirm('yakin?')";>hapus </a> </td>
				<td><?= $key['nomor']; ?></td>
				<td><?= $key['judul']; ?></td>
			</tr>

		<?php endforeach ?>
		
			
	</table>

</body>
</html>