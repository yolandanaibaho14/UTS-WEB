<!doctype html>
<html lang="en">
 <head>
  <title>Data Kabupaten</title>
  <script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57)) {
		   		alert("Data yang dimasukkan harus berupa angka!")
		   		return false;
		   } else {
		   		return true;
		   }
		}
	</script>
 </head>
 <body>
  <form method="post" action="skabupaten.php">
	<table>
	<tr>
		<td>Kode Provinsi</td>
		<td>:</td>
		<td><select name="kode_provinsi">
			<?php
			include "koneksi2.php";
			$sql="select * from provinsi";
			$query=mysqli_query($conn,$sql);
			while($data=mysqli_fetch_array($query)){
			echo "<option value='$data[0]'>$data[1]</option>";
			}
			?>
		</select> 
		
		</td>
	</tr>
	<tr>
		<td>Kode Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="kode_kab" onkeypress="return hanyaAngka(event)"></td>
	</tr>
	<tr>
		<td>Nama Kabupaten</td>
		<td>:</td>
		<td><input type="text" name="nama_kab"></td>
	</tr>
	
	<tr>
		<td><input type="reset" value="Batal"></td>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</table>
  </form>
  <strong>Data Kabupaten</strong>
  <table border="1">
  <tr>
	<td>Kode Provinsi</td>
	<td>Kode Kabupaten</td>
	<td>Nama Kabupaten</td>
	<td>Aksi</td>
  </tr>
  <?php
  include "koneksi2.php";
  $sql="select * from kabupaten";
  $query=mysqli_query($conn,$sql);
  while($data=mysqli_fetch_array($query)){
  echo"<tr>";
	echo"<td>$data[0]</td>";
	echo"<td>$data[1]</td>";
	echo"<td>$data[2]</td>";
	echo"<td><a href=./ekabupaten.php?id=$data[0]>Edit</a>|<a href=./dkabupaten.php?id=$data[0]>Hapus</a></td>";
  echo"</tr>";
  }
  ?>
  </table>
 </body>
</html>
