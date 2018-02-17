<?php 
$conn=mysqli_connect("localhost","root","","latihan_ci");

function query($query){

	global $conn;
	$result=mysqli_query($conn,$query);
	$row=[];
	while($rows=mysqli_fetch_assoc($result))
	{
		$row[]=$rows;
	}
	return $row;
}

function tambah($data1)
{
	global $conn;
	$data=$data1['nomor'];
	$datas=$data1['judul'];


	$query="INSERT into barang values ('','$data','$datas')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);



}
function edit($data1){

	//var_dump($data1);die;
	
	global $conn;
	$id=$data1['id'];
	$data=$data1['nomor'];
	$datas=$data1['judul'];


	$query="UPDATE barang set nomor='$data',judul='$datas' where id=$id";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);


}
function hapus($id){

	global $conn;
	mysqli_query($conn,"DELETE FROM barang where id=$id");
	return mysqli_affected_rows($conn);
}


 ?>