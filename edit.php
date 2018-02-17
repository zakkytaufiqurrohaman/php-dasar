<?php 
	require 'function.php';

	//

	$id=$_GET['id'];
	$data=query("SELECT * from barang WHERE id=$id")[0];

	if(isset($_POST["sumbit"]))
	{
		//var_dump($_POST["sumbit"]);die;
		if(edit($_POST)>0)
		{
			echo "
				<script>
					alert('berhasil bosq');
				document.location.href='index.php';
				</script>

			";
		}
		else {

			echo "
				<script>
					alert('gagal' bosq');
				document.location.href='index.php';
				</script>

			";
		}
	}


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>edit</title>
 </head>
 <body>
 	<form method=post>
 		<input type="hidden" name="id" value="<?=$data['id']; ?>"> 
 		<label for="nomor">masukkan nomor</label>
 		<input type="text" name="nomor" id="nomor" value="<?= $data['nomor']; ?>">

 		<label for="judul">masukkan judul</label>
 		<input type="text" name="judul" id="judul" value="<?= $data['judul']; ?>">

 		<button name="sumbit">update</button>

 	</form>
 
 </body>
 </html>