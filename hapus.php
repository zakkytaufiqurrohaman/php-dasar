<?php 
 require 'function.php';
$id=$_GET['id'];

if (hapus($id)>0)
{
	echo "
				<script>
					alert('berhasil bosq');
				document.location.href='index.php';
				</script>

			";
}
else{
	echo "
				<script>
					alert('gagal bosq');
				document.location.href='index.php';
				</script>

			";
}


 ?>