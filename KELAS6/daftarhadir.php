<?php
echo"<p align='center'>";
	//include("tombol.htm"); echo"<br>";
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_6",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); $data1=mysql_fetch_array ($hasil1);
	//$query2="SELECT * FROM ekskul_dan_saran WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); $data2=mysql_fetch_array ($hasil2);
	include"atas.php";
if (!isset($_GET['simpancatatan']))
{
	echo"<body bgcolor='grey'>";
	echo"<form method='GET' action='daftarhadir.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Daftar Hadir</b></td>"; 
	echo"</tr>";
	echo"</table>";echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Daftar Hadir</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><p align='center'><b>Sakit</b></p></td>";
	echo"<td><p align='center'><b>Ijin</b></p></td>";
	echo"<td><p align='center'><b>Absen</b></p></td>";
	echo"</tr>";
	$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); //$data1=mysql_fetch_array ($hasil1);
	//$query2="SELECT * FROM ekskul_dan_saran WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); //$data2=mysql_fetch_array ($hasil2);
	if($datas[4]!='')
	{
	$baris=0;
	while (($data1=mysql_fetch_array ($hasil1)) )
	{	
		echo"<tr>";
		echo"<td><p align='center'><input type='hidden' name='nabsen[]'value='$data1[0]'>$data1[0]</p></td>";
		echo"<td><input type='hidden' name='nama[]'size='200' value='$data1[1]'>$data1[1]</td>";
		echo"<td><input type='text' name='sakit[]' value='$data1[3]'></td>";
		echo"<td><input type='text' name='ijin[]' value='$data1[4]'> </td>";
		echo"<td><input type='text' name='absen[]' value='$data1[5]'> </td>";
		
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
	//$query2="SELECT * FROM ekskul_dan_saran WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); $data2=mysql_fetch_array ($hasil2);
	if(($datas[4]!='')and($data1[0]!=''))
	{
	$nama=$_GET['nama']; $baris=$_GET['jumbaris']; $noabsen=$_GET['nabsen'];
	$sakit = $_GET['sakit'];
	$ijin = $_GET['ijin'];
	$absen = $_GET['absen'];
	
	
	for ($i=0; $i<$baris; $i++)
	{
		$querysimpan1 = "UPDATE daftar_hadir SET sakit ='$sakit[$i]', ijin ='$ijin[$i]', absen ='$absen[$i]'  
						WHERE no_absen='$noabsen[$i]'";
		$hasilsimpan1=mysql_query($querysimpan1) or die(mysql_error());
		
	}
	}
	//$query="SELECT * FROM data_kesehatan WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
	$query1="SELECT * FROM daftar_hadir WHERE tahun_ajaran ='$datas[5]'"; $hasil1=mysql_query($query1) or die(mysql_error()); //$data1=mysql_fetch_array ($hasil1);
	//$query2="SELECT * FROM ekskul_dan_saran WHERE tahun_ajaran ='$datas[5]'"; $hasil2=mysql_query($query2) or die(mysql_error()); //$data2=mysql_fetch_array ($hasil2);
	echo"<body bgcolor='grey'>";
	echo"<form method='GET' action='daftarhadir.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Daftar Hadir</b></td>"; 
	echo"</tr>";
	echo"</table>";echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Daftar Hadir</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><p align='center'><b>Sakit</b></p></td>";
	echo"<td><p align='center'><b>Ijin</b></p></td>";
	echo"<td><p align='center'><b>Absen</b></p></td>";
	echo"</tr>";
	$baris=0;
	while (($data1=mysql_fetch_array ($hasil1)))
	{
		echo"<tr>";
		echo"<td><p align='center'><input type='hidden' name='nabsen[]'value='$data1[0]'>$data1[0]</p></td>";
		echo"<td><input type='hidden' name='nama[]'size='200' value='$data1[1]'>$data1[1]</td>";
		echo"<td><input type='text' name='sakit[]' value='$data1[3]'></td>";
		echo"<td><input type='text' name='ijin[]' value='$data1[4]'> </td>";
		echo"<td><input type='text' name='absen[]' value='$data1[5]'> </td>";
		
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