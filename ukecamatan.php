<?php
include "koneksi2.php";
$kode_kab=$_POST["kode_kab"];
$kode_kec=$_POST["kode_kec"];
$nama_kec=$_POST["nama_kec"];

$sql="UPDATE kecamatan set nama_kec='$nama_kec' where kode_kec='$kode_kec'";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kecamatan.php');
}
?>