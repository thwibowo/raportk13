<?php
echo"<p align='center'>";
	//include("tombol.htm"); echo"<br>";
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_4",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
	$query3="SELECT * FROM bobot_penilaian_ak WHERE mapel='PKN'"; $hasil3=mysql_query($query3) or die(mysql_error()); $data3=mysql_fetch_array ($hasil3);
	
	if($datas[4]==1)
	{
		$query="SELECT*FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error()); 
	}
	else if($datas[4]==2)
	{
		$query="SELECT*FROM nilai_ket_pkn_genap WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error()); 
	}
	include"atas.php";
if( (!isset($_GET['simpankd'])) && (!isset($_GET['simpannilai'])) && (!isset($_GET['simpanbobot']))  && (!isset($_GET['tambahkd'])) && (!isset($_GET['hapuskd'])))
{ 
	
	echo"<form method='GET' action='isinilaiketpkn.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Aspek</b></td><td>:</td><td><b>Keterampilan</b></td>"; echo"</tr>"; echo"<tr>";
	echo"<td><b>Mata Pelajaran</b></td><td>:</td><td><b>Pendidikan Kewarganegaraan</b></td>";
	echo"</tr>"; 
	echo"</table>"; echo"</br>";
	
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	
	$bariskd=0; $i = 1;
		while ($datakd = mysql_fetch_array ($hasilkd))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$datakd[0]'><b>KD$i :</b></td><td><input type='text' size='5' name='kkd[]' placeholder='kode KD' value='$datakd[1]'></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='pkd[]' cols='150' rows='2' style='font-family: Times; font-size:17;'>$datakd[2]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$bariskd++;
		}

	echo"</table></br>";
	echo"<button type='submit' class='btn btn-success' name='tambahkd' >Tambah Kolom KD</button>	<button type='submit' class='btn btn-danger' name='hapuskd'>Hapus Kolom KD</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpankd' >Simpan KD</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Praktek</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Produk</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Proyek</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Nilai Akhir</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Deskripsi</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	
	for($awal=0; $awal<3; $awal++)
	{	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd); /////BERMASALAH JIKA DIHILANGKAN!!!!
		while ($datakd = mysql_fetch_array ($hasilkd))
		{
			echo"<td><p align='center'><input type='hidden' name='kodekd[]' value='$datakd[1]'><b>$datakd[1]</b></p></td>";
		}
	}
		
	echo"<td><p align='center'><b>Skala 0-100</b></p></td>";
	echo"<td><p align='center'><b>Skala 0-4</b></p></td>";
	echo"<td><p align='center'><b>Predikat</b></p></td>";
	echo"</tr>";
	if ($datas[4]!='')
	{
	$baris=0;
	while ($data=mysql_fetch_array ($hasil))
	{
		$himpunannilai1 = array(); $himpunannilai2 = array(); $himpunannilai3 = array();
		for($h=0; $h<$banyakkd; $h++)
		{
			$h1 = $h + 3; $h2 = $h1 + $banyakkd; $h3 = $h2 + $banyakkd;
			$himpunannilai1[$h] = number_format($data[$h1],2,",","."); //number_format(number,decimals,decimalpoint,separator for thousands)
			$himpunannilai2[$h] = number_format($data[$h2],2,",","."); 
			$himpunannilai3[$h] = number_format($data[$h3],2,",","."); 
		}
		$h4 = $h3 + 1 ; $h5 = $h4 +1; $h6 = $h5 + 1 ; $h7 = $h6 +1; $h8 = $h7 + 1 ; $h9 = $h8 + 1 ; 
		$n1 = number_format($data[$h4],2,",","."); $n4 = number_format($data[$h5],2,",",".");
	 
	 echo"<tr>";
	 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
	 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
	 for($a=0; $a<$banyakkd; $a++)
	 {	
		$aa = $a+1;
		echo"<td><input type='text' name='praktekkd$aa"."[]' size='5' value='$himpunannilai1[$a]'></td>";
	 }
	 for($b=0; $b<$banyakkd; $b++)
	 {	
		$bb = $b+1;
		echo"<td><input type='text' name='produkkd$bb"."[]' size='5' value='$himpunannilai2[$b]'></td>";
	 }
	 for($c=0; $c<$banyakkd; $c++)
	 {	
		$cc = $c+1;
		echo"<td><input type='text' name='proyekkd$cc"."[]' size='5' value='$himpunannilai3[$c]'></td>";
	 }
	 
	 echo"<td><p align='center'><input type='hidden' name='nilai100[]' size='5' value='$data[$h4]'>$n1</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='nilai4[]' size='5' value='$data[$h5]'>$n4</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='npredikat[]' size='5' value='$data[$h6]'>$data[$h6]</p></td>";
	 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$h7], $data[$h8]</textarea></p></td>";
	 echo"<td><p align='center'><input type='hidden' name='keterangan[]' value='$data[$h9]'>$data[$h9]</p></td>";
	 echo"</tr>";
	 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
}

else if (isset($_GET['simpanbobot'])) //simpan bobot
{ $bnp=$_GET['bnp']; $buts=$_GET['buts']; $buas=$_GET['buas']; 
	$query4="UPDATE bobot_penilaian_ak SET bobot_ujk='$bnp',bobot_proj='$buts',bobot_port='$buas' WHERE mapel='PKN'";  $hasil4=mysql_query($query4) or die(mysql_error());
	$query3="SELECT * FROM bobot_penilaian_ak WHERE mapel='PKN'"; $hasil3=mysql_query($query3) or die(mysql_error()); $data3=mysql_fetch_array ($hasil3);
	
	echo"<form method='GET' action='isinilaiketpkn.php'>"; echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Aspek</b></td><td>:</td><td><b>Keterampilan</b></td>"; echo"</tr>"; echo"<tr>";
	echo"<td><b>Mata Pelajaran</b></td><td>:</td><td><b>Pendidikan Kewarganegaraan</b></td>";
	echo"</tr>"; 
	echo"</table>"; echo"</br>";
	
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	
	$bariskd=0; $i = 1;
		while ($datakd = mysql_fetch_array ($hasilkd))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$datakd[0]'><b>KD$i :</b></td><td><input type='text' size='5' name='kkd[]' placeholder='kode KD' value='$datakd[1]'></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='pkd[]' cols='150' rows='2' style='font-family: Times; font-size:17;'>$datakd[2]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$bariskd++;
		}
	
	echo"</table></br>"; 
	echo"<button type='submit' class='btn btn-success' name='tambahkd' >Tambah Kolom KD</button>	<button type='submit' class='btn btn-danger' name='hapuskd'>Hapus Kolom KD</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpankd' >Simpan KD</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Praktek</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Produk</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Proyek</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Nilai Akhir</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Deskripsi</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	
	for($awal=0; $awal<3; $awal++)
	{	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd); 
		while ($datakd = mysql_fetch_array ($hasilkd))
		{
			echo"<td><p align='center'><input type='hidden' name='kodekd[]' value='$datakd[1]'><b>$datakd[1]</b></p></td>";
		}
	}
		
	echo"<td><p align='center'><b>Skala 0-100</b></p></td>";
	echo"<td><p align='center'><b>Skala 0-4</b></p></td>";
	echo"<td><p align='center'><b>Predikat</b></p></td>";
	echo"</tr>";
	if ($datas[4]!='')
	{
	$baris=0;
	while ($data=mysql_fetch_array ($hasil))
	{
		$himpunannilai1 = array(); $himpunannilai2 = array(); $himpunannilai3 = array();
		for($h=0; $h<$banyakkd; $h++)
		{
			$h1 = $h + 3; $h2 = $h1 + $banyakkd; $h3 = $h2 + $banyakkd;
			$himpunannilai1[$h] = number_format($data[$h1],2,",","."); 
			$himpunannilai2[$h] = number_format($data[$h2],2,",","."); 
			$himpunannilai3[$h] = number_format($data[$h3],2,",","."); 
		}
		$h4 = $h3 + 1 ; $h5 = $h4 +1; $h6 = $h5 + 1 ; $h7 = $h6 +1; $h8 = $h7 + 1 ; $h9 = $h8 + 1 ; 
		$n1 = number_format($data[$h4],2,",","."); $n4 = number_format($data[$h5],2,",",".");
	 
	 echo"<tr>";
	 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
	 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
	 for($a=0; $a<$banyakkd; $a++)
	 {	
		$aa = $a+1;
		echo"<td><input type='text' name='praktekkd$aa"."[]' size='5' value='$himpunannilai1[$a]'></td>";
	 }
	 for($b=0; $b<$banyakkd; $b++)
	 {	
		$bb = $b+1;
		echo"<td><input type='text' name='produkkd$bb"."[]' size='5' value='$himpunannilai2[$b]'></td>";
	 }
	 for($c=0; $c<$banyakkd; $c++)
	 {	
		$cc = $c+1;
		echo"<td><input type='text' name='proyekkd$cc"."[]' size='5' value='$himpunannilai3[$c]'></td>";
	 }
	
	 echo"<td><p align='center'><input type='hidden' name='nilai100[]' size='5' value='$data[$h4]'>$n1</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='nilai4[]' size='5' value='$data[$h5]'>$n4</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='npredikat[]' size='5' value='$data[$h6]'>$data[$h6]</p></td>";
	 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$h7], $data[$h8]</textarea></p></td>";
	 echo"<td><p align='center'><input type='hidden' name='keterangan[]' value='$data[$h9]'>$data[$h9]</p></td>";
	 echo"</tr>";
	 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
	
}
else if (isset($_GET['hapuskd']))
{
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
	$queryindekskd="SELECT * FROM kd_ket_pkn"; $hasilindekskd=mysql_query($queryindekskd) or die(mysql_error()); $dataindekskd = mysql_fetch_array ($hasilindekskd);
	
	//$baru = $banyakkd - 1;
	if ($banyakkd > 3)
	{
		if($datas[4]==1)
		{
			$queryadd1 = "ALTER TABLE nilai_ket_pkn_ganjil DROP COLUMN praktek_kd$banyakkd "; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
			$queryadd2 = "ALTER TABLE nilai_ket_pkn_ganjil DROP COLUMN produk_kd$banyakkd "; $hasiladd2=mysql_query($queryadd2) or die(mysql_error());
			$queryadd3 = "ALTER TABLE nilai_ket_pkn_ganjil DROP COLUMN proyek_kd$banyakkd "; $hasiladd3=mysql_query($queryadd3) or die(mysql_error());
			$querydisplay="SELECT * FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
		}
		else if($datas[4]==2)
		{
			$queryadd1 = "ALTER TABLE nilai_ket_pkn_genap DROP COLUMN praktek_kd$banyakkd "; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
			$queryadd2 = "ALTER TABLE nilai_ket_pkn_genap DROP COLUMN produk_kd$banyakkd "; $hasiladd2=mysql_query($queryadd2) or die(mysql_error());
			$queryadd3 = "ALTER TABLE nilai_ket_pkn_genap DROP COLUMN proyek_kd$banyakkd "; $hasiladd3=mysql_query($queryadd3) or die(mysql_error());
			$querydisplay="SELECT * FROM nilai_ket_pkn_genap WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
		}
		$queryadd4 = "DELETE FROM kd_ket_pkn WHERE nomor='$banyakkd'"; $hasiladd4=mysql_query($queryadd4) or die(mysql_error());
	}
	else
	{
		if($datas[4]==1)
		{
			$querydisplay="SELECT * FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
		}
		else if($datas[4]==2)
		{
			$querydisplay="SELECT * FROM nilai_ket_pkn_genap WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
		}
	}

	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
	
	
	echo"<form method='GET' action='isinilaiketpkn.php'>"; echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Aspek</b></td><td>:</td><td><b>Keterampilan</b></td>"; echo"</tr>"; echo"<tr>";
	echo"<td><b>Mata Pelajaran</b></td><td>:</td><td><b>Pendidikan Kewarganegaraan</b></td>";
	echo"</tr>"; 
	echo"</table>"; echo"</br>";
	
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	
	$bariskd=0; $i = 1;
		while ($datakd = mysql_fetch_array ($hasilkd))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$datakd[0]'><b>KD$i :</b></td><td><input type='text' size='5' name='kkd[]' placeholder='kode KD' value='$datakd[1]'></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='pkd[]' cols='150' rows='2' style='font-family: Times; font-size:17;'>$datakd[2]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$bariskd++;
		}

	echo"</table></br>";
	echo"<button type='submit' class='btn btn-success' name='tambahkd' >Tambah Kolom KD</button>	<button type='submit' class='btn btn-danger' name='hapuskd'>Hapus Kolom KD</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpankd' >Simpan KD</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Praktek</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Produk</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Proyek</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Nilai Akhir</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Deskripsi</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	
	for($awal=0; $awal<3; $awal++)
	{	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd); /////BERMASALAH JIKA DIHILANGKAN!!!!
		while ($datakd = mysql_fetch_array ($hasilkd))
		{
			echo"<td><p align='center'><input type='hidden' name='kodekd[]' value='$datakd[1]'><b>$datakd[1]</b></p></td>";
		}
	}
		
	echo"<td><p align='center'><b>Skala 0-100</b></p></td>";
	echo"<td><p align='center'><b>Skala 0-4</b></p></td>";
	echo"<td><p align='center'><b>Predikat</b></p></td>";
	echo"</tr>";
	if ($datas[4]!='')
	{
	$baris=0;
	while ($datadisplay=mysql_fetch_array ($hasildisplay))
	{
		$himpunannilai1 = array(); $himpunannilai2 = array(); $himpunannilai3 = array();
		for($h=0; $h<$banyakkd; $h++)
		{
			$h1 = $h + 3; $h2 = $h1 + $banyakkd; $h3 = $h2 + $banyakkd;
			$himpunannilai1[$h] = number_format($datadisplay[$h1],2,",","."); //number_format(number,decimals,decimalpoint,separator for thousands)
			$himpunannilai2[$h] = number_format($datadisplay[$h2],2,",","."); 
			$himpunannilai3[$h] = number_format($datadisplay[$h3],2,",","."); 
		}
		$h4 = $h3 + 1 ; $h5 = $h4 +1; $h6 = $h5 + 1 ; $h7 = $h6 +1; $h8 = $h7 + 1 ; $h9 = $h8 + 1 ; 
		$n1 = number_format($datadisplay[$h4],2,",","."); $n4 = number_format($datadisplay[$h5],2,",",".");
	 
	 echo"<tr>";
	 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$datadisplay[0]'>$datadisplay[0]</p></td>";
	 echo"<td><input type='hidden' name='nama[]'size='50' value='$datadisplay[1]'> $datadisplay[1] </td>";
	 for($a=0; $a<$banyakkd; $a++)
	 {	
		$aa = $a+1;
		echo"<td><input type='text' name='praktekkd$aa"."[]' size='5' value='$himpunannilai1[$a]'></td>";
	 }
	 for($b=0; $b<$banyakkd; $b++)
	 {	
		$bb = $b+1;
		echo"<td><input type='text' name='produkkd$bb"."[]' size='5' value='$himpunannilai2[$b]'></td>";
	 }
	 for($c=0; $c<$banyakkd; $c++)
	 {	
		$cc = $c+1;
		echo"<td><input type='text' name='proyekkd$cc"."[]' size='5' value='$himpunannilai3[$c]'></td>";
	 }
	 
	 echo"<td><p align='center'><input type='hidden' name='nilai100[]' size='5' value='$datadisplay[$h4]'>$n1</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='nilai4[]' size='5' value='$datadisplay[$h5]'>$n4</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='npredikat[]' size='5' value='$datadisplay[$h6]'>$datadisplay[$h6]</p></td>";
	 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$datadisplay[$h7], $datadisplay[$h8]</textarea></p></td>";
	 echo"<td><p align='center'><input type='hidden' name='keterangan[]' value='$datadisplay[$h9]'>$datadisplay[$h9]</p></td>";
	 echo"</tr>";
	 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
}
else if (isset($_GET['tambahkd']))
{	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
	$queryindekskd="SELECT * FROM kd_ket_pkn"; $hasilindekskd=mysql_query($queryindekskd) or die(mysql_error()); $dataindekskd = mysql_fetch_array ($hasilindekskd);
	$baru = $banyakkd + 1;
	if($datas[4]==1)
	{
		$queryadd1 = "ALTER TABLE nilai_ket_pkn_ganjil ADD COLUMN praktek_kd$baru decimal(6,2) NOT NULL AFTER praktek_kd$banyakkd"; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
		$queryadd2 = "ALTER TABLE nilai_ket_pkn_ganjil ADD COLUMN produk_kd$baru decimal(6,2) NOT NULL AFTER produk_kd$banyakkd"; $hasiladd2=mysql_query($queryadd2) or die(mysql_error());
		$queryadd3 = "ALTER TABLE nilai_ket_pkn_ganjil ADD COLUMN proyek_kd$baru decimal(6,2) NOT NULL AFTER proyek_kd$banyakkd"; $hasiladd3=mysql_query($queryadd3) or die(mysql_error());
		$querydisplay="SELECT * FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
	}
	else if($datas[4]==2)
	{
		$queryadd1 = "ALTER TABLE nilai_ket_pkn_genap ADD COLUMN praktek_kd$baru decimal(6,2) NOT NULL AFTER praktek_kd$banyakkd"; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
		$queryadd2 = "ALTER TABLE nilai_ket_pkn_genap ADD COLUMN produk_kd$baru decimal(6,2) NOT NULL AFTER produk_kd$banyakkd"; $hasiladd2=mysql_query($queryadd2) or die(mysql_error());
		$queryadd3 = "ALTER TABLE nilai_ket_pkn_genap ADD COLUMN proyek_kd$baru decimal(6,2) NOT NULL AFTER proyek_kd$banyakkd"; $hasiladd3=mysql_query($queryadd3) or die(mysql_error());
		$querydisplay="SELECT * FROM nilai_ket_pkn_genap WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
	}
	
	$queryadd4 = "INSERT INTO kd_ket_pkn (nomor) VALUES ('$baru')"; $hasiladd4=mysql_query($queryadd4) or die(mysql_error());
	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
	
	
	echo"<form method='GET' action='isinilaiketpkn.php'>"; echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Aspek</b></td><td>:</td><td><b>Keterampilan</b></td>"; echo"</tr>"; echo"<tr>";
	echo"<td><b>Mata Pelajaran</b></td><td>:</td><td><b>Pendidikan Kewarganegaraan</b></td>";
	echo"</tr>"; 
	echo"</table>"; echo"</br>";
	
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	
	$bariskd=0; $i = 1;
		while ($datakd = mysql_fetch_array ($hasilkd))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$datakd[0]'><b>KD$i :</b></td><td><input type='text' size='5' name='kkd[]' placeholder='kode KD' value='$datakd[1]'></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='pkd[]' cols='150' rows='2' style='font-family: Times; font-size:17;'>$datakd[2]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$bariskd++;
		}

	echo"</table></br>";
	echo"<button type='submit' class='btn btn-success' name='tambahkd' >Tambah Kolom KD</button>	<button type='submit' class='btn btn-danger' name='hapuskd'>Hapus Kolom KD</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpankd' >Simpan KD</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Praktek</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Produk</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Proyek</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Nilai Akhir</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Deskripsi</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	
	for($awal=0; $awal<3; $awal++)
	{	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd); /////BERMASALAH JIKA DIHILANGKAN!!!!
		while ($datakd = mysql_fetch_array ($hasilkd))
		{
			echo"<td><p align='center'><input type='hidden' name='kodekd[]' value='$datakd[1]'><b>$datakd[1]</b></p></td>";
		}
	}
		
	echo"<td><p align='center'><b>Skala 0-100</b></p></td>";
	echo"<td><p align='center'><b>Skala 0-4</b></p></td>";
	echo"<td><p align='center'><b>Predikat</b></p></td>";
	echo"</tr>";
	if ($datas[4]!='')
	{
	$baris=0;
	while ($datadisplay=mysql_fetch_array ($hasildisplay))
	{
		$himpunannilai1 = array(); $himpunannilai2 = array(); $himpunannilai3 = array();
		for($h=0; $h<$banyakkd; $h++)
		{
			$h1 = $h + 3; $h2 = $h1 + $banyakkd; $h3 = $h2 + $banyakkd;
			$himpunannilai1[$h] = number_format($datadisplay[$h1],2,",","."); //number_format(number,decimals,decimalpoint,separator for thousands)
			$himpunannilai2[$h] = number_format($datadisplay[$h2],2,",","."); 
			$himpunannilai3[$h] = number_format($datadisplay[$h3],2,",","."); 
		}
		$h4 = $h3 + 1 ; $h5 = $h4 +1; $h6 = $h5 + 1 ; $h7 = $h6 +1; $h8 = $h7 + 1 ; $h9 = $h8 + 1 ; 
		$n1 = number_format($datadisplay[$h4],2,",","."); $n4 = number_format($datadisplay[$h5],2,",",".");
	 
		echo"<tr>";
		echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$datadisplay[0]'>$datadisplay[0]</p></td>";
		echo"<td><input type='hidden' name='nama[]'size='50' value='$datadisplay[1]'> $datadisplay[1] </td>";
		for($a=0; $a<$banyakkd; $a++)
		{	
			$aa = $a+1;
			echo"<td><input type='text' name='praktekkd$aa"."[]' size='5' value='$himpunannilai1[$a]'></td>";
		}
		for($b=0; $b<$banyakkd; $b++)
		{	
			$bb = $b+1;
			echo"<td><input type='text' name='produkkd$bb"."[]' size='5' value='$himpunannilai2[$b]'></td>";
		 }
		 for($c=0; $c<$banyakkd; $c++)
		 {	
			$cc = $c+1;
			echo"<td><input type='text' name='proyekkd$cc"."[]' size='5' value='$himpunannilai3[$c]'></td>";
		 }
	 
		 echo"<td><p align='center'><input type='hidden' name='nilai100[]' size='5' value='$datadisplay[$h4]'>$n1</p></td>";
		 echo"<td><p align='center'><input type='hidden' name='nilai4[]' size='5' value='$datadisplay[$h5]'>$n4</p></td>";
		 echo"<td><p align='center'><input type='hidden' name='npredikat[]' size='5' value='$datadisplay[$h6]'>$datadisplay[$h6]</p></td>";
		 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$datadisplay[$h7], $datadisplay[$h8]</textarea></p></td>";
		 echo"<td><p align='center'><input type='hidden' name='keterangan[]' value='$datadisplay[$h9]'>$datadisplay[$h9]</p></td>";
		 echo"</tr>";
		 $baris++;
	}
	echo"</table>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
}
else if (isset($_GET['simpankd']))
	{
		$kkd = $_GET['kkd']; $kd = $_GET['pkd']; $nomor = $_GET['nomor'];
		$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
		for ($k=0; $k<$banyakkd; $k++)
		{	
			$querysimpankd="UPDATE kd_ket_pkn SET kode_kd='$kkd[$k]', kd='$kd[$k]' WHERE nomor='$nomor[$k]'";
			$hasilsimpankd=mysql_query($querysimpankd) or die(mysql_error());			
		}
		$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error()); $banyakkd=mysql_num_rows($hasilkd);
		
	  
	  echo"<form method='GET' action='isinilaiketpkn.php'>"; echo"<p align='center'>";
	  echo"<table border=0>";
	  echo"<tr>";
	  echo"<td><b>Aspek</b></td><td>:</td><td><b>Keterampilan</b></td>"; echo"</tr>"; echo"<tr>";
	  echo"<td><b>Mata Pelajaran</b></td><td>:</td><td><b>Pendidikan Kewarganegaraan</b></td>";
	  echo"</tr>"; 
	  echo"</table>"; echo"</br>";
	  
	  echo"<p align='center'>";
	  echo"<table border='3' bordercolor='black'>";
	
	$bariskd=0; $i = 1;
		while ($datakd = mysql_fetch_array ($hasilkd))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$datakd[0]'><b>KD$i :</b></td><td><input type='text' size='5' name='kkd[]' placeholder='kode KD' value='$datakd[1]'></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='pkd[]' cols='150' rows='2' style='font-family: Times; font-size:17;'>$datakd[2]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$bariskd++;
		}
	
	echo"</table></br>"; 
	echo"<button type='submit' class='btn btn-success' name='tambahkd' >Tambah Kolom KD</button>	<button type='submit' class='btn btn-danger' name='hapuskd'>Hapus Kolom KD</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpankd' >Simpan KD</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Praktek</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Produk</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Proyek</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Nilai Akhir</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Deskripsi</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	
	for($awal=0; $awal<3; $awal++)
	{	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd); 
		while ($datakd = mysql_fetch_array ($hasilkd))
		{
			echo"<td><p align='center'><input type='hidden' name='kodekd[]' value='$datakd[1]'><b>$datakd[1]</b></p></td>";
		}
	}
		
	echo"<td><p align='center'><b>Skala 0-100</b></p></td>";
	echo"<td><p align='center'><b>Skala 0-4</b></p></td>";
	echo"<td><p align='center'><b>Predikat</b></p></td>";
	echo"</tr>";
	if ($datas[4]!='')
	{
	$baris=0;
	while ($data=mysql_fetch_array ($hasil))
	{
		$himpunannilai1 = array(); $himpunannilai2 = array(); $himpunannilai3 = array();
		for($h=0; $h<$banyakkd; $h++)
		{
			$h1 = $h + 3; $h2 = $h1 + $banyakkd; $h3 = $h2 + $banyakkd;
			$himpunannilai1[$h] = number_format($data[$h1],2,",","."); 
			$himpunannilai2[$h] = number_format($data[$h2],2,",","."); 
			$himpunannilai3[$h] = number_format($data[$h3],2,",","."); 
		}
		$h4 = $h3 + 1 ; $h5 = $h4 +1; $h6 = $h5 + 1 ; $h7 = $h6 +1; $h8 = $h7 + 1 ; $h9 = $h8 + 1 ; 
		$n1 = number_format($data[$h4],2,",","."); $n4 = number_format($data[$h5],2,",",".");
	 
	 echo"<tr>";
	 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
	 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
	 for($a=0; $a<$banyakkd; $a++)
	 {	
		$aa = $a+1;
		echo"<td><input type='text' name='praktekkd$aa"."[]' size='5' value='$himpunannilai1[$a]'></td>";
	 }
	 for($b=0; $b<$banyakkd; $b++)
	 {	
		$bb = $b+1;
		echo"<td><input type='text' name='produkkd$bb"."[]' size='5' value='$himpunannilai2[$b]'></td>";
	 }
	 for($c=0; $c<$banyakkd; $c++)
	 {	
		$cc = $c+1;
		echo"<td><input type='text' name='proyekkd$cc"."[]' size='5' value='$himpunannilai3[$c]'></td>";
	 }
	 
	 echo"<td><p align='center'><input type='hidden' name='nilai100[]' size='5' value='$data[$h4]'>$n1</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='nilai4[]' size='5' value='$data[$h5]'>$n4</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='npredikat[]' size='5' value='$data[$h6]'>$data[$h6]</p></td>";
	 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$h7], $data[$h8]</textarea></p></td>";
	 echo"<td><p align='center'><input type='hidden' name='keterangan[]' value='$data[$h9]'>$data[$h9]</p></td>";
	 echo"</tr>";
	 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
	}
else if (isset($_GET['simpannilai']))
	{ 	
		$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
		$querykkm="SELECT * FROM kkm";
		$hasilkkm=mysql_query($querykkm) or die(mysql_error());
		$datakkm=mysql_fetch_array ($hasilkkm);
		
		$kkm = $datakkm[0];
		$selisih = round((100-$kkm)/3);
		$kkmtengah = $kkm + $selisih;
		$kkmatas = $kkmtengah + $selisih;
		if ($datas[4]!='')
	{
		$nama=$_GET['nama']; $baris=$_GET['jumbaris']; $noabsen=$_GET['nabsen'];
		
		$pembagi = array(); $praktekkd = array(); $produkkd = array(); $proyekkd = array(); $ratakd = array(); $pos1 = array(); $pos2 = array(); $pos3 = array(); $himpunankd = array(); 
		 $nilaiakhir = array(); $himpunanratakd = array(); $kdbesar = array(); $kdkecil = array();
		for ($i=0; $i<$baris; $i++)
		{
			$totalratakd = 0; 
			for ($h=0; $h<$banyakkd; $h++)
			{	
				$nomor = $h + 1;
				$pembagi[$h] = 0;
				$indekskd = $h + 1;
				$praktekkd[$h]=$_GET['praktekkd'.$indekskd]; $produkkd[$h]=$_GET['produkkd'.$indekskd]; $proyekkd[$h]=$_GET['proyekkd'.$indekskd];
				//var_dump($praktekkd);
			
				if (($praktekkd[$h][$i] != null) or ($praktekkd[$h][$i] != '')){$pembagi[$h]++;}  //bisa pake <> !=
				if (($produkkd[$h][$i] != null) or ($praktekkd[$h][$i] != '')){$pembagi[$h]++;}
				if (($proyekkd[$h][$i] != null) or ($praktekkd[$h][$i] != '')){$pembagi[$h]++;}
				
				$pos1[$h]=strpos($praktekkd[$h][$i],".");				//mencari posisi tanda koma dan menggantinya dengan titik 
				if ($pos1[$h] = -1){$praktekkd[$h][$i] = str_replace(",",".",$praktekkd[$h][$i]);} 
				$pos2[$h]=strpos($produkkd[$h][$i],".");
				if ($pos2[$h] = -1){$produkkd[$h][$i] = str_replace(",",".",$produkkd[$h][$i]);} 
				$pos3[$h]=strpos($proyekkd[$h][$i],".");
				if ($pos3[$h] = -1){$proyekkd[$h][$i] = str_replace(",",".",$proyekkd[$h][$i]);}  
				
				$ratakd[$h] = (2*($praktekkd[$h][$i]) + $produkkd[$h][$i] + $proyekkd[$h][$i])/(($pembagi[$h]) + 1 );
				$totalratakd = $totalratakd + $ratakd[$h];
				$himpunanratakd[$h] = $ratakd[$h];
				$querykd="SELECT * FROM kd_ket_pkn WHERE nomor='$nomor'"; $hasilkd=mysql_query($querykd); $datakd = mysql_fetch_array($hasilkd);
				$himpunankd[$h] = array ($ratakd[$h] , $datakd[2]);
				//echo $himpunankd[$h][0]." ".$himpunankd[$h][1]."</br>";
				
				if($datas[4]==1)
				{
					$querysimpan = "UPDATE nilai_ket_pkn_ganjil SET praktek_kd$indekskd ='".$praktekkd[$h][$i]."', produk_kd$indekskd ='".$produkkd[$h][$i]."', proyek_kd$indekskd ='".$proyekkd[$h][$i]."'
								WHERE no_absen='".$noabsen[$i]."'";
					
					$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
				}
				else if($datas[4]==2)
				{
					$querysimpan = "UPDATE nilai_ket_pkn_genap SET praktek_kd$indekskd ='".$praktekkd[$h][$i]."', produk_kd$indekskd ='".$produkkd[$h][$i]."', proyek_kd$indekskd ='".$proyekkd[$h][$i]."'
								WHERE no_absen='".$noabsen[$i]."'";
					$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
				}
			}
			$nilaiakhir[$i] = $totalratakd/$banyakkd;
			$nilai4[$i] = ($nilaiakhir[$i]*4)/100;
			sort($himpunanratakd);
			$kurang = $h - 1;
			$kdbesar[$i] = $himpunanratakd[$kurang]; 
			$kdkecil[$i] = $himpunanratakd[0];
			
			for ($y=0; $y<$banyakkd; $y++)  
			{
				if($kdbesar[$i]==$himpunankd[$y][0]){$kalimatpositif = $himpunankd[$y][1];}
				if($kdkecil[$i]==$himpunankd[$y][0]){$kalimatnegatif = $himpunankd[$y][1];}
			}
			
			if      (($kdbesar[$i] > $kkmatas) && ($kdbesar[$i] <= 100))   { $deskripsipositif[$i] = 'Ananda '.$nama[$i].' sangat baik dalam '.$kalimatpositif;} 
			else if (($kdbesar[$i] > $kkmtengah) && ($kdbesar[$i] <= $kkmatas))   { $deskripsipositif[$i] = 'Ananda '.$nama[$i].' baik dalam '.$kalimatpositif;}
			else if (($kdbesar[$i] >= $kkm) && ($kdbesar[$i] <= $kkmtengah))   { $deskripsipositif[$i] = 'Ananda '.$nama[$i].' cukup baik dalam '.$kalimatpositif;}
			else if ($kdbesar[$i] < $kkm)   { $deskripsipositif[$i] = 'Ananda '.$nama[$i].' perlu bimbingan dalam '.$kalimatpositif;}
			
			if      (($kdkecil[$i] > $kkmatas) && ($kdkecil[$i] <= 100))   { $deskripsinegatif[$i] = 'Sangat baik dalam '.$kalimatnegatif;}
			else if (($kdkecil[$i] > $kkmtengah) && ($kdkecil[$i] <= $kkmatas))   { $deskripsinegatif[$i] = 'Baik dalam '.$kalimatnegatif;}
			else if (($kdkecil[$i] >= $kkm) && ($kdkecil[$i] <= $kkmtengah))   { $deskripsinegatif[$i] = 'Cukup baik dalam '.$kalimatnegatif;}
			else if ($kdkecil[$i] < $kkm)   { $deskripsinegatif[$i] = 'Perlu bimbingan dalam '.$kalimatnegatif;}
			
			if      (($nilaiakhir[$i] > 85) && ($nilaiakhir[$i] <= 100))   { $predikat[$i] = 'A';}
			else if (($nilaiakhir[$i] > 70) && ($nilaiakhir[$i] <= 85))   { $predikat[$i] = 'B';}
			else if (($nilaiakhir[$i] > 55) && ($nilaiakhir[$i] <= 70))   { $predikat[$i] = 'C';}
			else if ($nilaiakhir[$i] <= 55)   { $predikat[$i] = 'D';}
			
			if      ($nilaiakhir[$i] >= $kkm) {$keterangan[$i] = 'Tuntas';}
			else if ($nilaiakhir[$i] < $kkm)  {$keterangan[$i] = 'Tidak Tuntas';}
			
			if($datas[4]==1)
			{
				$querysimpan = "UPDATE nilai_ket_pkn_ganjil SET  nilai_100 ='$nilaiakhir[$i]', nilai_4 ='$nilai4[$i]', predikat ='$predikat[$i]', 
								deskripsi_positif= '$deskripsipositif[$i]' , deskripsi_negatif='$deskripsinegatif[$i]', keterangan ='$keterangan[$i]' WHERE no_absen='$noabsen[$i]'";
				$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
				$query="SELECT*FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
			}
			else if($datas[4]==2)
			{
				$querysimpan = "UPDATE nilai_ket_pkn_genap SET nilai_100 ='$nilaiakhir[$i]', nilai_4 ='$nilai4[$i]', predikat ='$predikat[$i]',
								deskripsi_positif= '$deskripsipositif[$i]' , deskripsi_negatif='$deskripsinegatif[$i]', keterangan ='$keterangan[$i]' WHERE no_absen='$noabsen[$i]'";
				$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
				$query="SELECT*FROM nilai_ket_pkn_genap WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
			}
		}
	}
	
	echo"<form method='GET' action='isinilaiketpkn.php'>"; echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Aspek</b></td><td>:</td><td><b>Keterampilan</b></td>"; echo"</tr>"; echo"<tr>";
	echo"<td><b>Mata Pelajaran</b></td><td>:</td><td><b>Pendidikan Kewarganegaraan</b></td>";
	echo"</tr>"; 
	echo"</table>"; echo"</br>";
	
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	
	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd) or die(mysql_error());
	$bariskd=0; $i = 1;
		while ($datakd = mysql_fetch_array ($hasilkd))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$datakd[0]'><b>KD$i :</b></td><td><input type='text' size='5' name='kkd[]' placeholder='kode KD' value='$datakd[1]'></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='pkd[]' cols='150' rows='2' style='font-family: Times; font-size:17;'>$datakd[2]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$bariskd++;
		}
	
	echo"</table></br>"; 
	echo"<button type='submit' class='btn btn-success' name='tambahkd' >Tambah Kolom KD</button>	<button type='submit' class='btn btn-danger' name='hapuskd'>Hapus Kolom KD</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpankd' >Simpan KD</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='2' ><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='2' width='200'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Praktek</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Produk</b></p></td>";
	echo"<td colspan='$banyakkd'><p align='center'><b>Nilai Proyek</b></p></td>";
	echo"<td colspan='3'><p align='center'><b>Nilai Akhir</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Deskripsi</b></p></td>";
	echo"<td rowspan='2'><p align='center'><b>Keterangan</b></p></td>";
	echo"</tr>";
	echo"<tr>";
	
	for($awal=0; $awal<3; $awal++)
	{	$querykd="SELECT * FROM kd_ket_pkn"; $hasilkd=mysql_query($querykd); 
		while ($datakd = mysql_fetch_array ($hasilkd))
		{
			echo"<td><p align='center'><input type='hidden' name='kodekd[]' value='$datakd[1]'><b>$datakd[1]</b></p></td>";
		}
	}
		
	echo"<td><p align='center'><b>Skala 0-100</b></p></td>";
	echo"<td><p align='center'><b>Skala 0-4</b></p></td>";
	echo"<td><p align='center'><b>Predikat</b></p></td>";
	echo"</tr>";
	if ($datas[4]!='')
	{
	$baris=0;
	while ($data=mysql_fetch_array ($hasil))
	{
		$himpunannilai1 = array(); $himpunannilai2 = array(); $himpunannilai3 = array();
		for($h=0; $h<$banyakkd; $h++)
		{
			$h1 = $h + 3; $h2 = $h1 + $banyakkd; $h3 = $h2 + $banyakkd;
			$himpunannilai1[$h] = number_format($data[$h1],2,",","."); 
			$himpunannilai2[$h] = number_format($data[$h2],2,",","."); 
			$himpunannilai3[$h] = number_format($data[$h3],2,",","."); 
		}
		$h4 = $h3 + 1 ; $h5 = $h4 +1; $h6 = $h5 + 1 ; $h7 = $h6 +1; $h8 = $h7 + 1 ; $h9 = $h8 + 1 ; 
		$n1 = number_format($data[$h4],2,",","."); $n4 = number_format($data[$h5],2,",",".");
	 
	 echo"<tr>";
	 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
	 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
	 for($a=0; $a<$banyakkd; $a++)
	 {	
		$aa = $a+1;
		echo"<td><input type='text' name='praktekkd$aa"."[]' size='5' value='$himpunannilai1[$a]'></td>";
	 }
	 for($b=0; $b<$banyakkd; $b++)
	 {	
		$bb = $b+1;
		echo"<td><input type='text' name='produkkd$bb"."[]' size='5' value='$himpunannilai2[$b]'></td>";
	 }
	 for($c=0; $c<$banyakkd; $c++)
	 {	
		$cc = $c+1;
		echo"<td><input type='text' name='proyekkd$cc"."[]' size='5' value='$himpunannilai3[$c]'></td>";
	 }
	
	 echo"<td><p align='center'><input type='hidden' name='nilai100[]' size='5' value='$data[$h4]'>$n1</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='nilai4[]' size='5' value='$data[$h5]'>$n4</p></td>";
	 echo"<td><p align='center'><input type='hidden' name='npredikat[]' size='5' value='$data[$h6]'>$data[$h6]</p></td>";
	 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$h7], $data[$h8]</textarea></p></td>";
	 echo"<td><p align='center'><input type='hidden' name='keterangan[]' value='$data[$h9]'>$data[$h9]</p></td>";
	 echo"</tr>";
	 $baris++;
	}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}else{echo"</table></br>";}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
	}
	mysql_close($koneksi);
echo"</p>";
?>