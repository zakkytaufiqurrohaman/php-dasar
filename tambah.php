
<?php 

	require 'function.php';

	if (isset($_POST['submit']))
	{
		if(tambah($_POST)>0)
		{

			echo "
				<script>
					alert('berhasil bosq');
				document.location.href='index.php';
				</script>

			";
		}
		else
		{
			echo "
				<script>
					alert('salah bosq');
				document.location.href='index.php';

				</script>

			";
		}


	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<title>tambah</title>
</head>
<body>

<form method=post>
	<label for='nomor'> masukkan nomor</label>
	<input type='text' name="nomor" id='nomor' placeholder='masukkan nomor'>

	<br>
	<label for='judul'> masukkan judul</label>
	<input type='text' name="judul" id='judul' placeholder='masukkan judul'>

	<br>
	<button name="submit">kirim</button>

</form>

</body>
</html>