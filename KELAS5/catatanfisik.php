<?php
echo"<p align='center'>";
	//include("tombol.htm"); echo"<br>";
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_5",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$query="SELECT * FROM data_kesehatan WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error()); $data=mysql_fetch_array ($hasil);
	include"atas.php";
if (!isset($_GET['simpancatatan']))
{
	
	echo"<form method='GET' action='catatanfisik.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Catatan Fisik Kesehatan</b></td>"; 
	echo"</tr>";
	echo"</table>"; echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='2'><p align='center'><b>Tinggi Badan</b></p></td>";
	echo"<td colspan='2'><p align='center'><b>Berat Badan</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Kondisi Kesehatan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><p align='center'><b>Semester 1</b></p></td>";
	echo"<td><p align='center'><b>Semester 2</b></p></td>";
	echo"<td><p align='center'><b>Semester 1</b></p></td>";
	echo"<td><p align='center'><b>Semester 2</b></p></td>";
	echo"<td width='100'><p align='center'><b>Pendengaran</b></p></td>";
	echo"<td width='100'><p align='center'><b>Pengelihatan</b></p></td>";
	echo"<td width='100'><p align='center'><b>Gigi</b></p></td>";
	echo"<td width='100'><p align='center'><b>Lainnya</b></p></td>";
	echo"</tr>";
	$query="SELECT * FROM data_kesehatan WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
	if($datas[4]!='')
	{
	$baris=0;
	while ($data=mysql_fetch_array ($hasil))
	{
		echo"<tr>";
		echo"<td><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>\n";
		echo"<td width='200'><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>\n";
		echo"<td><input type='text' name='tinggibadan1[]' value='$data[3]'> </td>\n";
		echo"<td><input type='text' name='tinggibadan2[]' value='$data[4]'> </td>\n";
		echo"<td><input type='text' name='beratbadan1[]' value='$data[5]'> </td>\n";
		echo"<td><input type='text' name='beratbadan2[]' value='$data[6]'></td>\n";
		echo"<td><input type='text' name='pendengaran[]' value='$data[7]'></td>\n";
		echo"<td><input type='text' name='pengelihatan[]' value='$data[8]'> </td>\n";
		echo"<td><input type='text' name='gigi[]' value='$data[9]'></td>\n";
		echo"<td><input type='text' name='lainnya[]'size='30' value='$data[10]'> </td>\n";
		echo"</tr>";
		 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpancatatan'>Simpan Catatan</button>"; echo"</p>"; 
		echo"</form>";
		include"bawah.php";
}
else if (isset($_GET['simpancatatan']))
{
	if(($datas[4]!='')and($data[0]!=''))
	{
	$nama=$_GET['nama']; $baris=$_GET['jumbaris']; $noabsen=$_GET['nabsen'];
	$tinggibadan1 = $_GET['tinggibadan1'];
	$tinggibadan2 = $_GET['tinggibadan2'];
	$beratbadan1 = $_GET['beratbadan1'];
	$beratbadan2 = $_GET['beratbadan2'];
	$pendengaran = $_GET['pendengaran'];
	$pengelihatan = $_GET['pengelihatan'];
	$gigi = $_GET['gigi'];
	$lainnya = $_GET['lainnya'];
	for ($i=0; $i<$baris; $i++)
	{
		$querysimpan = "UPDATE data_kesehatan SET tb_semester1 ='$tinggibadan1[$i]', tb_semester2 ='$tinggibadan2[$i]',
												  bb_semester1 ='$beratbadan1[$i]', bb_semester2 ='$beratbadan2[$i]',
												  pendengaran ='$pendengaran[$i]', pengelihatan ='$pengelihatan[$i]',
												  gigi ='$gigi[$i]', lainnya ='$lainnya[$i]' 
						WHERE no_absen='$noabsen[$i]'";
		$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
	}
	}
	$query="SELECT * FROM data_kesehatan WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
	
	echo"<form method='GET' action='catatanfisik.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Catatan Fisik Kesehatan</b></td>"; 
	echo"</tr>";
	echo"</table>"; echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='2'><p align='center'><b>Tinggi Badan</b></p></td>";
	echo"<td colspan='2'><p align='center'><b>Berat Badan</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Kondisi Kesehatan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><p align='center'><b>Semester 1</b></p></td>";
	echo"<td><p align='center'><b>Semester 2</b></p></td>";
	echo"<td><p align='center'><b>Semester 1</b></p></td>";
	echo"<td><p align='center'><b>Semester 2</b></p></td>";
	echo"<td width='100'><p align='center'><b>Pendengaran</b></p></td>";
	echo"<td width='100'><p align='center'><b>Pengelihatan</b></p></td>";
	echo"<td width='100'><p align='center'><b>Gigi</b></p></td>";
	echo"<td width='100'><p align='center'><b>Lainnya</b></p></td>";
	echo"</tr>";
	$baris=0;
	while ($data=mysql_fetch_array ($hasil))
	{
		echo"<tr>";
		echo"<td><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
		echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
		echo"<td><input type='text' name='tinggibadan1[]' value='$data[3]'></td>";
		echo"<td><input type='text' name='tinggibadan2[]' value='$data[4]'></td>";
		echo"<td><input type='text' name='beratbadan1[]' value='$data[5]'></td>";
		echo"<td><input type='text' name='beratbadan2[]' value='$data[6]'></td>";
		echo"<td><input type='text' name='pendengaran[]' value='$data[7]'></td>";
		echo"<td><input type='text' name='pengelihatan[]' value='$data[8]'></td>";
		echo"<td><input type='text' name='gigi[]' value='$data[9]'></td>";
		echo"<td><input type='text' name='lainnya[]'size='50' value='$data[10]'></td>";
		echo"</tr>";
		 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	echo"<button type='submit' class='btn btn-primary' name='simpancatatan'>Simpan Catatan</button>"; echo"</p>"; 
		echo"</form>";
		include"bawah.php";
}	
	mysql_close($koneksi);
	echo"</p>";
?>