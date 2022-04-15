<?php

	$nama=$_GET['carinama'];
	//$nama='tatas';
	
	
	//buka koneksi ke system mysql
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	
	//buka database
	mysql_select_db("raportk13_5",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	//$query="SELECT * FROM biodata_siswa WHERE tahun_ajaran LIKE '%$tahun%' ";
	$query="SELECT * FROM data_siswa WHERE nama LIKE '%$nama%' ";
	
	//eksekusi query
	$hasil=mysql_query($query) or die(mysql_error());
	
	include"atas.php";
	
	//other proccess
	echo"<form name='cari' method='GET' action='carisiswa.php'>";
	echo"Cari siswa <input type='text' name='carinama'> <button type='submit' class='btn btn-primary' name='cari'>Cari</button>";
	echo"</form>";
	echo"<br>";
	
	echo"<p align='center'";
	echo"<form method='GET' action='hapusbiosiswa2.php'>";
	echo"<p align='center'>";
	echo"<table border=1>";
	echo"<tr>";
	echo"<td><b>No. Absen</b></td>";
	echo"<td><b>No. Induk</b></td>";
	echo"<td><b>Nama Siswa</b></td>";
	echo"<td><b>Tempat/Tanggal Lahir(Thn/Bln/Tgl)</b></td>";
	echo"<td><b>Jenis Kelamin</b></td>";
	//echo"<td><b>Agama</b></td>";
	echo"</tr>";
	
	while ($data=mysql_fetch_array ($hasil))
	{echo"<tr>";
	 echo"<td> $data[0] </td>";
	 echo"<td> $data[2] </td>";
	 echo"<td> $data[3] </td>";
	 echo"<td> $data[4], $data[5] </td>";
	 echo"<td> $data[6] </td>";
	// echo"<td> $data[7] </td>";
	 echo"<td><a href='detailbiosiswa.php?nipd=$data[2]' class='btn btn-primary'>Detail</a></td>";
	 echo"<td><a href='hapusbiosiswa1.php?nipd=$data[2]' class='btn btn-danger' >Hapus</a></td>";
	 echo"<td><input type='checkbox' name='nipd[]' value='$data[2]'></td>";
	 echo"</tr>";
	}
	echo"</table> <br>"; 
	
	echo"<button type='submit' class='btn btn-danger' name='hapus'>Delete</button>";
	echo"</p>";
	echo"</form>";
	
	echo"</div>
    <script src='/RAPORTK13/vendor/jquery/jquery.min.js'></script>
    <script src='/RAPORTK13/vendor/bootstrap/js/bootstrap.min.js'></script>
    <script src='/RAPORTK13/vendor/metisMenu/metisMenu.min.js'></script>
    <script src='/RAPORTK13/vendor/raphael/raphael.min.js'></script>
    <script src='/RAPORTK13/vendor/morrisjs/morris.min.js'></script>
    <script src='/RAPORTK13/data/morris-data.js'></script>  
    <script src='/RAPORTK13/dist/js/sb-admin-2.js'></script>
	</body>
	</html>";
	
	//tutup koneksi
	mysql_close($koneksi);
	
	include"bawah.php";

?>