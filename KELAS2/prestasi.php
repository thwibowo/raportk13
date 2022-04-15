<?php
echo"<p align='center'>";
	//include("tombol.htm"); echo"<br>";
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_2",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	//$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); $data1=mysql_fetch_array ($hasil1);
	$query2="SELECT * FROM prestasi_siswa WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); $data2=mysql_fetch_array ($hasil2);
	include"atas.php";
if (!isset($_GET['simpancatatan']))
{
	echo"<body bgcolor='grey'>";
	echo"<form method='GET' action='prestasi.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Daftar Prestasi Siswa</b></td>"; 
	echo"</tr>";
	echo"</table>";echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Prestasi</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><p align='center'><b>Prestasi 1</b></p></td>";
	echo"<td><p align='center'><b>Prestasi 2</b></p></td>";
	echo"<td><p align='center'><b>Prestasi 3</b></p></td>";
	echo"<td><p align='center'><b>Prestasi 4</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 1</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 2</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 3</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 4</b></p></td>";
	echo"</tr>";
	//$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); //$data1=mysql_fetch_array ($hasil1);
	$query2="SELECT * FROM prestasi_siswa WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); //$data2=mysql_fetch_array ($hasil2);
	if($datas[4]!='')
	{
	$baris=0;
	while (($data2=mysql_fetch_array ($hasil2)))
	{	
		echo"<tr>";
		echo"<td><p align='center'><input type='hidden' name='nabsen[]'value='$data2[0]'>$data2[0]</p></td>";
		echo"<td><input type='hidden' name='nama[]'size='200' value='$data2[1]'>$data2[1]</td>";
		
		echo"<td><input type='text' name='prestasi1[]' value='$data2[3]'> </td>";
		echo"<td><input type='text' name='prestasi2[]' value='$data2[4]'> </td>";
		echo"<td><input type='text' name='prestasi3[]' value='$data2[5]'> </td>";
		echo"<td><input type='text' name='prestasi4[]' value='$data2[6]'> </td>";
		
		echo"<td><input type='text' name='keterangan1[]' value='$data2[7]'> </td>";
		echo"<td><input type='text' name='keterangan2[]' value='$data2[8]'> </td>";
		echo"<td><input type='text' name='keterangan3[]' value='$data2[9]'> </td>";
		echo"<td><input type='text' name='keterangan4[]' value='$data2[10]'> </td>";
		
		echo"</tr>";
		
		 $baris++;
	}
	
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpancatatan'>Simpan</button>"; echo"</p>"; 
		echo"</form>";
		include"bawah.php";
}
else if (isset($_GET['simpancatatan']))
{	//$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); $data1=mysql_fetch_array ($hasil1);
	//$query2="SELECT * FROM prestasi WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); $data2=mysql_fetch_array ($hasil2);
	if(($datas[4]!='')and($data2[0]!=''))
	{
	$nama=$_GET['nama']; $baris=$_GET['jumbaris']; $noabsen=$_GET['nabsen'];
	
	$prestasi1 = $_GET['prestasi1'];
	$prestasi2 = $_GET['prestasi2'];
	$prestasi3 = $_GET['prestasi3'];
	$prestasi4 = $_GET['prestasi4'];
	
	$keterangan1 = $_GET['keterangan1'];
	$keterangan2 = $_GET['keterangan2'];
	$keterangan3 = $_GET['keterangan3'];
	$keterangan4 = $_GET['keterangan4'];
	
	for ($i=0; $i<$baris; $i++)
	{
		
		$querysimpan2 = "UPDATE prestasi_siswa SET prestasi1 ='$prestasi1[$i]',prestasi2 ='$prestasi2[$i]',prestasi3 ='$prestasi3[$i]', prestasi4 ='$prestasi4[$i]',
						keterangan1 ='$keterangan1[$i]',keterangan2 ='$keterangan2[$i]',keterangan3 ='$keterangan3[$i]',keterangan4 ='$keterangan4[$i]'  
						WHERE no_absen='$noabsen[$i]'";
		$hasilsimpan2=mysql_query($querysimpan2) or die(mysql_error());
	}
	}
	//$query="SELECT * FROM data_kesehatan WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
	//$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); //$data1=mysql_fetch_array ($hasil1);
	$query2="SELECT * FROM prestasi_siswa WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); //$data2=mysql_fetch_array ($hasil2);
	echo"<body bgcolor='grey'>";
	echo"<form method='GET' action='prestasi.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Daftar Hadir & Ekstrakurikuler</b></td>"; 
	echo"</tr>";
	echo"</table>";echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Prestasi</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><p align='center'><b>Prestasi 1</b></p></td>";
	echo"<td><p align='center'><b>Prestasi 2</b></p></td>";
	echo"<td><p align='center'><b>Prestasi 3</b></p></td>";
	echo"<td><p align='center'><b>Prestasi 4</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 1</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 2</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 3</b></p></td>";
	echo"<td><p align='center'><b>Keterangan 4</b></p></td>";
	echo"</tr>";
	$baris=0;
	while (($data2=mysql_fetch_array ($hasil2)))
	{
		echo"<tr>";
		echo"<td><p align='center'><input type='hidden' name='nabsen[]'value='$data2[0]'>$data2[0]</p></td>";
		echo"<td><input type='hidden' name='nama[]'size='200' value='$data2[1]'>$data2[1]</td>";
		
		echo"<td><input type='text' name='prestasi1[]' value='$data2[3]'> </td>";
		echo"<td><input type='text' name='prestasi2[]' value='$data2[4]'> </td>";
		echo"<td><input type='text' name='prestasi3[]' value='$data2[5]'> </td>";
		echo"<td><input type='text' name='prestasi4[]' value='$data2[6]'> </td>";
		
		echo"<td><input type='text' name='keterangan1[]' value='$data2[7]'> </td>";
		echo"<td><input type='text' name='keterangan2[]' value='$data2[8]'> </td>";
		echo"<td><input type='text' name='keterangan3[]' value='$data2[9]'> </td>";
		echo"<td><input type='text' name='keterangan4[]' value='$data2[10]'> </td>";
		
		echo"</tr>";
		 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	echo"<button type='submit' class='btn btn-primary' name='simpancatatan'>Simpan</button>"; echo"</p>"; 
		echo"</form>";
		include"bawah.php";
}	
	mysql_close($koneksi);
	echo"</p>";
?>