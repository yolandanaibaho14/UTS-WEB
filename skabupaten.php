<?php
include "koneksi2.php";

$kode_prov=$_POST["kode_provinsi"];
$kode_kab=$_POST["kode_kab"];
$nama_kab=$_POST["nama_kab"];


$sql="insert into kabupaten values('$kode_prov','$kode_kab','$nama_kab')";
$query=mysqli_query($conn,$sql);
if($query){
	header('location:kabupaten.php');
}
?>