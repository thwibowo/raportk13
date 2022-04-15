<?php
echo"<p align='center'>";
	//include("tombol.htm"); echo"<br>";
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_2",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
	
	if($datas[4]==1)
	{
		$query="SELECT*FROM nilai_sosial_ganjil WHERE tahun_ajaran ='$datas[5]'";  $hasil=mysql_query($query) or die(mysql_error()); 
	}
	else if($datas[4]==2)
	{
		$query="SELECT*FROM nilai_sosial_genap WHERE tahun_ajaran ='$datas[5]'";  $hasil=mysql_query($query) or die(mysql_error()); 
	}
	//echo "jumlah: ".mysql_num_rows($hasil);
	include"atas.php";
if( (!isset($_GET['simpanaspek'])) && (!isset($_GET['simpannilai'])) && (!isset($_GET['tambahaspek'])) && (!isset($_GET['hapusaspek'])))
{ 
	
	echo"<form method='GET' action='isinilaisosial.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Penilaian Sikap sosial</b></td>"; 
	echo"</tr>";
	echo"</table>";echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	
	$barisaspek=0; $i = 1;
		while ($dataaspek = mysql_fetch_array ($hasilaspek))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$dataaspek[0]'><b>Aspek$i :</b></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='aspek[]' cols='50' rows='2' style='font-family: Times; font-size:17;'>$dataaspek[1]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$barisaspek++;
		}

	echo"</table></br>";
	echo"<button type='submit' class='btn btn-success' name='tambahaspek' >Tambah Kolom</button>	<button type='submit' class='btn btn-danger' name='hapusaspek'>Hapus Kolom</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpanaspek' >Simpan</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td width='30' height='30'><p align='center'><b>No.</b></p></td>";
	echo"<td width='200'><p align='center'><b>Nama</b></p></td>";
	
	for($a=0; $a<$banyakaspek; $a++)
	{	
		$b = $a+1; 
		echo"<td colspan='4'><p align='center'><b>Aspek$b</b></p></td>";
	}
	echo"<td><p align='center'><b>Rerata</b></p></td>";
	echo"<td><p align='center'><b>Deskripsi</b></p></td>";
	echo"</tr>";

	if ($datas[4]!='')
	{
		$baris=0;
		while ($data=mysql_fetch_array ($hasil))
		{
		 echo"<tr>";
		 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
		 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
		 $c=0; $b=3;
		 for($a=0; $a<$banyakaspek; $a++)
		 {	$aa = $a+1;
			for($y=0; $y<4; $y++)
			{
				$z=$y+1; 
				echo"<td><input type='number' min='0' max='4' name='nilai$z"."aspek$aa"."[]' size='5' value='$data[$b]'></td>\n";
				$b++;
			}
			
		 }
		 $indeksdata1 = ($banyakaspek * 4) + 3;
		 $indeksdata2 = $indeksdata1 + 1;
		 echo"<td><p align='center'><input type='hidden' name='rerata[]' size='5' value='$data[$indeksdata1]'>$data[$indeksdata1]</p></td>";
		 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$indeksdata2]</textarea></p></td>";
		 echo"</tr>";
		 $baris++;
		}
	
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}
	else
	{
		echo"</table></br>"; 
	}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
}

else if (isset($_GET['tambahaspek']))
{	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
	$queryindeksaspek="SELECT * FROM aspek_sosial"; $hasilindeksaspek=mysql_query($queryindeksaspek) or die(mysql_error()); $dataindeksaspek = mysql_fetch_array ($hasilindeksaspek);
	$baru = $banyakaspek + 1;
	if($datas[4]==1)
	{
		$queryadd1 = "ALTER TABLE nilai_sosial_ganjil ADD COLUMN nilai1_aspek$baru integer(2) NOT NULL AFTER nilai4_aspek$banyakaspek"; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
		$queryadd2 = "ALTER TABLE nilai_sosial_ganjil ADD COLUMN nilai2_aspek$baru integer(2) NOT NULL AFTER nilai1_aspek$baru"; $hasiladd2=mysql_query($queryadd2) or die(mysql_error()); 
		$queryadd3 = "ALTER TABLE nilai_sosial_ganjil ADD COLUMN nilai3_aspek$baru integer(2) NOT NULL AFTER nilai2_aspek$baru"; $hasiladd3=mysql_query($queryadd3) or die(mysql_error()); 
		$queryadd4 = "ALTER TABLE nilai_sosial_ganjil ADD COLUMN nilai4_aspek$baru integer(2) NOT NULL AFTER nilai3_aspek$baru"; $hasiladd4=mysql_query($queryadd4) or die(mysql_error()); 
		$querydisplay="SELECT * FROM nilai_sosial_ganjil WHERE tahun_ajaran='$datas[5]'"; $hasil=mysql_query($querydisplay) or die(mysql_error());
	}
	else if($datas[4]==2)
	{
		$queryadd1 = "ALTER TABLE nilai_sosial_genap ADD COLUMN nilai1_aspek$baru integer(2) NOT NULL AFTER nilai4_aspek$banyakaspek"; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
		$queryadd2 = "ALTER TABLE nilai_sosial_genap ADD COLUMN nilai2_aspek$baru integer(2) NOT NULL AFTER nilai1_aspek$baru"; $hasiladd2=mysql_query($queryadd2) or die(mysql_error()); 
		$queryadd3 = "ALTER TABLE nilai_sosial_genap ADD COLUMN nilai3_aspek$baru integer(2) NOT NULL AFTER nilai2_aspek$baru"; $hasiladd3=mysql_query($queryadd3) or die(mysql_error()); 
		$queryadd4 = "ALTER TABLE nilai_sosial_genap ADD COLUMN nilai4_aspek$baru integer(2) NOT NULL AFTER nilai3_aspek$baru"; $hasiladd4=mysql_query($queryadd4) or die(mysql_error()); 
		$querydisplay="SELECT * FROM nilai_sosial_genap WHERE tahun_ajaran='$datas[5]'"; $hasil=mysql_query($querydisplay) or die(mysql_error());
	}
	
	$queryadd4 = "INSERT INTO aspek_sosial (nomor) VALUES ('$baru')"; $hasiladd4=mysql_query($queryadd4) or die(mysql_error());
	$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
	
	
	echo"<form method='GET' action='isinilaisosial.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Penilaian Sikap sosial</b></td>"; 
	echo"</tr>"; 
	echo"</table>";echo"</br>";echo"</br>";
	echo"<table border='3' bordercolor='black'>";
	
	$barisaspek=0; $i = 1;
		while ($dataaspek = mysql_fetch_array ($hasilaspek))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$dataaspek[0]'><b>Aspek$i :</b></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='aspek[]' cols='50' rows='2' style='font-family: Times; font-size:17;'>$dataaspek[1]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$barisaspek++;
		}

	echo"</table></br>";
	echo"<button type='submit' class='btn btn-success' name='tambahaspek' >Tambah Kolom</button>	<button type='submit' class='btn btn-danger' name='hapusaspek'>Hapus Kolom</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpanaspek' >Simpan</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td width='30' height='30'><p align='center'><b>No.</b></p></td>";
	echo"<td width='200'><p align='center'><b>Nama</b></p></td>";
	
	for($a=0; $a<$banyakaspek; $a++)
	{	
		$b = $a+1; 
		echo"<td colspan='4'><p align='center'><b>Aspek$b</b></p></td>";
	}
	echo"<td><p align='center'><b>Rerata</b></p></td>";
	echo"<td><p align='center'><b>Deskripsi</b></p></td>";
	echo"</tr>";

	if ($datas[4]!='')
	{
		$baris=0;
		while ($data=mysql_fetch_array ($hasil))
		{
		 echo"<tr>";
		 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
		 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
		 $c=0; $b=3;
		 for($a=0; $a<$banyakaspek; $a++)
		 {	$aa = $a+1;
			for($y=0; $y<4; $y++)
			{
				$z=$y+1; 
				echo"<td><input type='number' min='0' max='4' name='nilai$z"."aspek$aa"."[]' size='5' value='$data[$b]'></td>\n";
				$b++;
			}
			
		 }
		 
		 $indeksdata1 = ($banyakaspek * 4) + 3;
		 $indeksdata2 = $indeksdata1 + 1;
		 echo"<td><p align='center'><input type='hidden' name='rerata[]' size='5' value='$data[$indeksdata1]'>$data[$indeksdata1]</p></td>";
		 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$indeksdata2]</textarea></p></td>";
		 echo"</tr>";
		 $baris++;
		}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}
	else
	{
		echo"</table></br>"; 
	}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
}
else if (isset($_GET['hapusaspek']))
{
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
	//$queryindeksaspek="SELECT * FROM aspek_sosial"; $hasilindeksaspek=mysql_query($queryindeksaspek) or die(mysql_error()); $dataindeksaspek = mysql_fetch_array ($hasilindeksaspek);
	//echo"$banyakaspek";
	if ($banyakaspek > 3)
	{
		if($datas[4]==1)
		{
			$queryadd1 = "ALTER TABLE nilai_sosial_ganjil DROP COLUMN nilai1_aspek$banyakaspek "; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
			$queryadd2 = "ALTER TABLE nilai_sosial_ganjil DROP COLUMN nilai2_aspek$banyakaspek "; $hasiladd2=mysql_query($queryadd2) or die(mysql_error()); 
			$queryadd3 = "ALTER TABLE nilai_sosial_ganjil DROP COLUMN nilai3_aspek$banyakaspek "; $hasiladd3=mysql_query($queryadd3) or die(mysql_error()); 
			$queryadd4 = "ALTER TABLE nilai_sosial_ganjil DROP COLUMN nilai4_aspek$banyakaspek "; $hasiladd4=mysql_query($queryadd4) or die(mysql_error()); 
			$querydisplay="SELECT * FROM nilai_sosial_ganjil WHERE tahun_ajaran='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
		}
		else if($datas[4]==2)
		{
			$queryadd1 = "ALTER TABLE nilai_sosial_genap DROP COLUMN nilai1_aspek$banyakaspek "; $hasiladd1=mysql_query($queryadd1) or die(mysql_error()); 
			$queryadd2 = "ALTER TABLE nilai_sosial_genap DROP COLUMN nilai2_aspek$banyakaspek "; $hasiladd2=mysql_query($queryadd2) or die(mysql_error()); 
			$queryadd3 = "ALTER TABLE nilai_sosial_genap DROP COLUMN nilai3_aspek$banyakaspek "; $hasiladd3=mysql_query($queryadd3) or die(mysql_error()); 
			$queryadd4 = "ALTER TABLE nilai_sosial_genap DROP COLUMN nilai4_aspek$banyakaspek "; $hasiladd4=mysql_query($queryadd4) or die(mysql_error()); 
			$querydisplay="SELECT * FROM nilai_sosial_genap WHERE tahun_ajaran='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
		}
		$queryadd4 = "DELETE FROM aspek_sosial WHERE nomor='$banyakaspek'"; $hasiladd4=mysql_query($queryadd4) or die(mysql_error());
	}
	else
	{
		if($datas[4]==1)
		{
			$querydisplay="SELECT * FROM nilai_sosial_ganjil WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
		}
		else if($datas[4]==2)
		{
			$querydisplay="SELECT * FROM nilai_sosial_genap WHERE tahun_ajaran='$datas[5]'"; $hasildisplay=mysql_query($querydisplay) or die(mysql_error());
		}
	}

	$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
	
	
	echo"<form method='GET' action='isinilaisosial.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Penilaian Sikap sosial</b></td>"; 
	echo"</tr>";
	echo"</table>";echo"</br>";echo"</br>";	
	echo"<table border='3' bordercolor='black'>";
	
	$barisaspek=0; $i = 1;
		while ($dataaspek = mysql_fetch_array ($hasilaspek))
		{	
			echo"<tr>";
			echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$dataaspek[0]'><b>Aspek$i :</b></td></tr>";
			echo"<tr>";
			echo"<td><textarea name='aspek[]' cols='50' rows='2' style='font-family: Times; font-size:17;'>$dataaspek[1]</textarea></td>"; 
			echo"</tr>"; 
			$i++;
			$barisaspek++;
		}

	echo"</table></br>";
	echo"<button type='submit' class='btn btn-success' name='tambahaspek' >Tambah Kolom</button>	<button type='submit' class='btn btn-danger' name='hapusaspek'>Hapus Kolom</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpanaspek' >Simpan</button>"; echo"</p>"; 
	echo"</br>"; echo"</br>";
	echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td width='30' height='30'><p align='center'><b>No.</b></p></td>";
	echo"<td width='200'><p align='center'><b>Nama</b></p></td>";
	
	for($a=0; $a<$banyakaspek; $a++)
	{	
		$b = $a+1; 
		echo"<td colspan='4'><p align='center'><b>Aspek$b</b></p></td>";
	}
	echo"<td><p align='center'><b>Rerata</b></p></td>";
	echo"<td><p align='center'><b>Deskripsi</b></p></td>";
	echo"</tr>";

	if ($datas[4]!='')
	{
		$baris=0;
		while ($data=mysql_fetch_array ($hasil))
		{
		 echo"<tr>";
		 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
		 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
		 $c=0; $b=3;
		 for($a=0; $a<$banyakaspek; $a++)
		 {	$aa = $a+1;
			for($y=0; $y<4; $y++)
			{
				$z=$y+1; 
				echo"<td><input type='number' min='0' max='4' name='nilai$z"."aspek$aa"."[]' size='5' value='$data[$b]'></td>\n";
				$b++;
			}
			
		 }
		 
		 $indeksdata1 = ($banyakaspek * 4) + 3;
		 $indeksdata2 = $indeksdata1 + 1;
		 echo"<td><p align='center'><input type='hidden' name='rerata[]' size='5' value='$data[$indeksdata1]'>$data[$indeksdata1]</p></td>";
		 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$indeksdata2]</textarea></p></td>";
		 echo"</tr>";
		 $baris++;
		}
	echo"</table></br>"; 
	echo"<input type='hidden' name='jumbaris' value='$baris'>";
	}
	else
	{
		echo"</table></br>"; 
	}
	echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
}
else if (isset($_GET['simpanaspek']))
	{
		$aspek = $_GET['aspek']; $nomor = $_GET['nomor'];
		$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
		for ($k=0; $k<$banyakaspek; $k++)
		{	
			$querysimpan="UPDATE aspek_sosial SET aspek='$aspek[$k]' WHERE nomor='$nomor[$k]'";
			$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());			
		}
		$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek) or die(mysql_error()); $banyakaspek=mysql_num_rows($hasilaspek);
		
		 
		echo"<form method='GET' action='isinilaisosial.php'>";
		echo"<p align='center'>";
		echo"<table border=0>";
		echo"<tr>";
		echo"<td><b>Penilaian Sikap sosial</b></td>"; 
		echo"</tr>";
		echo"</table>";echo"</br>";echo"</br>";
		echo"<table border='3' bordercolor='black'>";
		
		$barisaspek=0; $i = 1;
			while ($dataaspek = mysql_fetch_array ($hasilaspek))
			{	
				echo"<tr>";
				echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$dataaspek[0]'><b>Aspek$i :</b></td></tr>";
				echo"<tr>";
				echo"<td><textarea name='aspek[]' cols='50' rows='2' style='font-family: Times; font-size:17;'>$dataaspek[1]</textarea></td>"; 
				echo"</tr>"; 
				$i++;
				$barisaspek++;
			}

		echo"</table></br>";
		echo"<button type='submit' class='btn btn-success' name='tambahaspek' >Tambah Kolom</button>	<button type='submit' class='btn btn-danger' name='hapusaspek'>Hapus Kolom</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpanaspek' >Simpan</button>"; echo"</p>"; 
		echo"</br>"; echo"</br>";
		echo"<p align='center'>";
		echo"<table border='3' bordercolor='black'>";
		echo"<tr>";
		echo"<td width='30' height='30'><p align='center'><b>No.</b></p></td>";
		echo"<td width='200'><p align='center'><b>Nama</b></p></td>";
		
		for($a=0; $a<$banyakaspek; $a++)
		{	
			$b = $a+1; 
			echo"<td colspan='4'><p align='center'><b>Aspek$b</b></p></td>";
		}
		echo"<td><p align='center'><b>Rerata</b></p></td>";
		echo"<td><p align='center'><b>Deskripsi</b></p></td>";
		echo"</tr>";

		if ($datas[4]!='')
		{
			$baris=0;
			while ($data=mysql_fetch_array ($hasil))
			{
			 echo"<tr>";
			 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
			 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
			 $c=0; $b=3;
			 for($a=0; $a<$banyakaspek; $a++)
			 {	$aa = $a+1;
				for($y=0; $y<4; $y++)
				{
					$z=$y+1; 
					echo"<td><input type='number' min='0' max='4' name='nilai$z"."aspek$aa"."[]' size='5' value='$data[$b]'></td>\n";
					$b++;
				}
				
			 }
			 
			 $indeksdata1 = ($banyakaspek * 4) + 3;
			 $indeksdata2 = $indeksdata1 + 1;
			 echo"<td><p align='center'><input type='hidden' name='rerata[]' size='5' value='$data[$indeksdata1]'>$data[$indeksdata1]</p></td>";
			 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$indeksdata2]</textarea></p></td>";
			 echo"</tr>";
			 $baris++;
			}
		echo"</table></br>"; 
		echo"<input type='hidden' name='jumbaris' value='$baris'>";
		}
		else
		{
			echo"</table></br>"; 
		}
		echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
	echo"</form>";
	include"bawah.php";
	}
else if (isset($_GET['simpannilai']))//////MASIH KURANG!!!!!!!!
	{ 	
		$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
		$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek); $banyakaspek=mysql_num_rows($hasilaspek);
		$keterangan = '';
		while ($dataaspek = mysql_fetch_array($hasilaspek))
		{
			$keterangan = $keterangan.' '.$dataaspek[1].','; 
		}
		$nama=$_GET['nama']; $baris=$_GET['jumbaris']; $noabsen=$_GET['nabsen'];
		function modus($array)
		{ 
			if(!is_array($array))
			{ 
				return FALSE; 
			}
			else
			{ 
				$v = array_count_values($array); 
				arsort($v); 
				foreach($v as $k => $v){$total = $k; break;} 
				return $total; 
			} 
		}
		  
		$nilaiakhir = array(); $himpunanmodus = array(); $ratamodus = array(); $setnilaiaspek = array(); $akomid = array(1,2,3,3,3,3);
		for ($i=0; $i<$baris; $i++)
		{
			$totalmodus=0;
			for ($h=0; $h<$banyakaspek; $h++)
			{	
				$m = $h + 1;
				for ($k=0; $k<4; $k++)
				{	
					$n = $k + 1;
					$setnilaiaspek[$k] = $_GET['nilai'.$n.'aspek'.$m];
					$nilaiaspek[$k] = $setnilaiaspek[$k][$i];
				}
				//print_r ($nilaiaspek); echo"</br>";
				$himpunanmodus[$h] = modus($nilaiaspek);
				$totalmodus = $totalmodus + $himpunanmodus[$h];
				
				if($datas[4]==1)
					{
						$querysimpan = "UPDATE nilai_sosial_ganjil SET nilai1_aspek$m ='".$nilaiaspek[0]."', nilai2_aspek$m ='".$nilaiaspek[1]."',
										nilai3_aspek$m ='".$nilaiaspek[2]."', nilai4_aspek$m ='".$nilaiaspek[3]."'
									WHERE no_absen='".$noabsen[$i]."'";
						
						$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
					}
				else if($datas[4]==2)
					{
						$querysimpan = "UPDATE nilai_sosial_genap SET nilai1_aspek$m ='".$nilaiaspek[0]."', nilai2_aspek$m ='".$nilaiaspek[1]."',
										nilai3_aspek$m ='".$nilaiaspek[2]."', nilai4_aspek$m ='".$nilaiaspek[3]."'
									WHERE no_absen='".$noabsen[$i]."'";
						
						$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
					}
			}
			$ratamodus[$i] = $totalmodus/$banyakaspek;
			$ratamodusbulat[$i] = round($ratamodus[$i]);
			
			if      ($ratamodusbulat[$i] <= 2)   { $deskripsi[$i] = 'Ananda '.$nama[$i].' perlu bimbingan dalam'.$keterangan;} 
			else if ($ratamodusbulat[$i] == 3)  { $deskripsi[$i] = 'Ananda '.$nama[$i].' taat dalam'.$keterangan;}
			else if ($ratamodusbulat[$i] == 4)  { $deskripsi[$i] = 'Ananda '.$nama[$i].' sangat taat dalam'.$keterangan;}
///////////in case error lagi , deskripsi ='".$deskripsi[$i]."'
			if($datas[4]==1)
			{
				$querysimpan = "UPDATE nilai_sosial_ganjil SET rerata ='".$ratamodusbulat[$i]."' , deskripsi ='".$deskripsi[$i]."'
								WHERE no_absen='".$noabsen[$i]."'";
				$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
				$query="SELECT*FROM nilai_sosial_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
			}
			else if($datas[4]==2)
			{
				$querysimpan = "UPDATE nilai_sosial_genap SET rerata ='".$ratamodusbulat[$i]."' , deskripsi ='".$deskripsi[$i]."'
								WHERE no_absen='".$noabsen[$i]."'";
				$hasilsimpan=mysql_query($querysimpan) or die(mysql_error());
				$query="SELECT*FROM nilai_sosial_genap WHERE tahun_ajaran ='$datas[5]'"; $hasil=mysql_query($query) or die(mysql_error());
			}			
		}	
	
		
		echo"<form method='GET' action='isinilaisosial.php'>";
		echo"<p align='center'>";
		echo"<table border=0>";
		echo"<tr>";
		echo"<td><b>Penilaian Sikap sosial</b></td>"; 
		echo"</tr>";
		echo"</table>";echo"</br>";echo"</br>";		
		echo"<table border='3' bordercolor='black'>";
		$queryaspek="SELECT * FROM aspek_sosial"; $hasilaspek=mysql_query($queryaspek); $banyakaspek=mysql_num_rows($hasilaspek);
		$barisaspek=0; $i = 1;
			while ($dataaspek = mysql_fetch_array ($hasilaspek))
			{	
				echo"<tr>";
				echo"<td rowspan='2'><input type='hidden' name='nomor[]' value='$dataaspek[0]'><b>Aspek$i :</b></td></tr>";
				echo"<tr>";
				echo"<td><textarea name='aspek[]' cols='50' rows='2' style='font-family: Times; font-size:17;'>$dataaspek[1]</textarea></td>"; 
				echo"</tr>"; 
				$i++;
				$barisaspek++;
			}

		echo"</table></br>";
		echo"<button type='submit' class='btn btn-success' name='tambahaspek' >Tambah Kolom</button>	<button type='submit' class='btn btn-danger' name='hapusaspek'>Hapus Kolom</button></br></br>"; 
	echo"<button type='submit' class='btn btn-primary' name='simpanaspek' >Simpan</button>"; echo"</p>"; 
		echo"</br>"; echo"</br>";
		echo"<p align='center'>";
		echo"<table border='3' bordercolor='black'>";
		echo"<tr>";
		echo"<td width='30' height='30'><p align='center'><b>No.</b></p></td>";
		echo"<td width='200'><p align='center'><b>Nama</b></p></td>";
		
		for($a=0; $a<$banyakaspek; $a++)
		{	
			$b = $a+1; 
			echo"<td colspan='4'><p align='center'><b>Aspek$b</b></p></td>";
		}
		echo"<td><p align='center'><b>Rerata</b></p></td>";
		echo"<td><p align='center'><b>Deskripsi</b></p></td>";
		echo"</tr>";

		if ($datas[4]!='')
		{
			$baris=0;
			while ($data=mysql_fetch_array ($hasil))
			{
			 echo"<tr>";
			 echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
			 echo"<td><input type='hidden' name='nama[]'size='50' value='$data[1]'> $data[1] </td>";
			 $c=0; $b=3;
			 for($a=0; $a<$banyakaspek; $a++)
			 {	$aa = $a+1;
				for($y=0; $y<4; $y++)
				{
					$z=$y+1; 
					echo"<td><input type='number' min='0' max='4' name='nilai$z"."aspek$aa"."[]' size='5' value='$data[$b]'></td>\n";
					$b++;
				}
				
			 }
			 
			 $indeksdata1 = ($banyakaspek * 4) + 3;
			 $indeksdata2 = $indeksdata1 + 1;
			 echo"<td><p align='center'><input type='hidden' name='rerata[]' size='5' value='$data[$indeksdata1]'>$data[$indeksdata1]</p></td>";
			 echo"<td><p align='center'><textarea name='deskripsi[]' cols='60' rows='5' readonly>$data[$indeksdata2]</textarea></p></td>";
			 echo"</tr>";
			 $baris++;
			}
		echo"</table></br>"; 
		echo"<input type='hidden' name='jumbaris' value='$baris'>";
		}
		else
		{
			echo"</table></br>"; 
		}
			echo"<button type='submit' class='btn btn-primary' name='simpannilai'>Simpan Nilai</button>"; echo"</p>"; 
		echo"</form>";
		include"bawah.php";
	}
	mysql_close($koneksi);
echo"</p>";
?>