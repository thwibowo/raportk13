<?php
echo"<p align='center'>";
	//include("tombol.htm"); echo"<br>";
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_4",$koneksi) or die(mysql_error());
	$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$query="SELECT * FROM data_siswa"; $hasil=mysql_query($query) or die(mysql_error()); $data=mysql_fetch_array ($hasil);
	if($datas[4]==1)
	{
		$querypips="SELECT*FROM nilai_peng_ips_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpips=mysql_query($querypips) or die(mysql_error()); 
		$querypipa="SELECT*FROM nilai_peng_ipa_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpipa=mysql_query($querypipa) or die(mysql_error()); 
		$querypagama="SELECT*FROM nilai_peng_agama_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpagama=mysql_query($querypagama) or die(mysql_error()); 
		$querypbi="SELECT*FROM nilai_peng_bi_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpbi=mysql_query($querypbi) or die(mysql_error()); 
		$querypbd="SELECT*FROM nilai_peng_bd_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpbd=mysql_query($querypbd) or die(mysql_error()); 
		$querypmtk="SELECT*FROM nilai_peng_mtk_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpmtk=mysql_query($querypmtk) or die(mysql_error()); 
		$queryppkn="SELECT*FROM nilai_peng_pkn_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilppkn=mysql_query($queryppkn) or die(mysql_error()); 
		$querypsbp="SELECT*FROM nilai_peng_sbp_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilpsbp=mysql_query($querypsbp) or die(mysql_error()); 
		$queryppjok="SELECT*FROM nilai_peng_pjok_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilppjok=mysql_query($queryppjok) or die(mysql_error());
		
		$querykips="SELECT*FROM nilai_ket_ips_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkips=mysql_query($querykips) or die(mysql_error()); 
		$querykipa="SELECT*FROM nilai_ket_ipa_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkipa=mysql_query($querykipa) or die(mysql_error()); 
		$querykagama="SELECT*FROM nilai_ket_agama_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkagama=mysql_query($querykagama) or die(mysql_error()); 
		$querykbi="SELECT*FROM nilai_ket_bi_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkbi=mysql_query($querykbi) or die(mysql_error()); 
		$querykbd="SELECT*FROM nilai_ket_bd_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkbd=mysql_query($querykbd) or die(mysql_error()); 
		$querykmtk="SELECT*FROM nilai_ket_mtk_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkmtk=mysql_query($querykmtk) or die(mysql_error()); 
		$querykpkn="SELECT*FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkpkn=mysql_query($querykpkn) or die(mysql_error()); 
		$queryksbp="SELECT*FROM nilai_ket_sbp_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilksbp=mysql_query($queryksbp) or die(mysql_error()); 
		$querykpjok="SELECT*FROM nilai_ket_pjok_ganjil WHERE tahun_ajaran ='$datas[5]'"; $hasilkpjok=mysql_query($querykpjok) or die(mysql_error()); 		
	}
	else if($datas[4]==2)
	{
		$querypips="SELECT*FROM nilai_peng_ips_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpips=mysql_query($querypips) or die(mysql_error()); 
		$querypipa="SELECT*FROM nilai_peng_ipa_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpipa=mysql_query($querypipa) or die(mysql_error()); 
		$querypagama="SELECT*FROM nilai_peng_agama_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpagama=mysql_query($querypagama) or die(mysql_error()); 
		$querypbi="SELECT*FROM nilai_peng_bi_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpbi=mysql_query($querypbi) or die(mysql_error()); 
		$querypbd="SELECT*FROM nilai_peng_bd_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpbd=mysql_query($querypbd) or die(mysql_error()); 
		$querypmtk="SELECT*FROM nilai_peng_mtk_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpmtk=mysql_query($querypmtk) or die(mysql_error()); 
		$queryppkn="SELECT*FROM nilai_peng_pkn_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilppkn=mysql_query($queryppkn) or die(mysql_error()); 
		$querypsbp="SELECT*FROM nilai_peng_sbp_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilpsbp=mysql_query($querypsbp) or die(mysql_error()); 
		$queryppjok="SELECT*FROM nilai_peng_pjok_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilppjok=mysql_query($queryppjok) or die(mysql_error());
		
		$querykips="SELECT*FROM nilai_ket_ips_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkips=mysql_query($querykips) or die(mysql_error()); 
		$querykipa="SELECT*FROM nilai_ket_ipa_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkipa=mysql_query($querykipa) or die(mysql_error()); 
		$querykagama="SELECT*FROM nilai_ket_agama_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkagama=mysql_query($querykagama) or die(mysql_error()); 
		$querykbi="SELECT*FROM nilai_ket_bi_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkbi=mysql_query($querykbi) or die(mysql_error()); 
		$querykbd="SELECT*FROM nilai_ket_bd_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkbd=mysql_query($querykbd) or die(mysql_error()); 
		$querykmtk="SELECT*FROM nilai_ket_mtk_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkmtk=mysql_query($querykmtk) or die(mysql_error()); 
		$querykpkn="SELECT*FROM nilai_ket_pkn_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkpkn=mysql_query($querykpkn) or die(mysql_error()); 
		$queryksbp="SELECT*FROM nilai_ket_sbp_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilksbp=mysql_query($queryksbp) or die(mysql_error()); 
		$querykpjok="SELECT*FROM nilai_ket_pjok_genap WHERE tahun_ajaran ='$datas[5]'"; $hasilkpjok=mysql_query($querykpjok) or die(mysql_error());  		
	}
		
	include"atas.php";
	echo"<form method='GET' action='naikkelaskumulatif.php'>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>REKAP DAFTAR NILAI RAPORT SEMESTER $datas[4]</b></td>"; 
	echo"</tr>"; 
	echo"<tr>";
	echo"<td><p align='center'><b>TAHUN PELAJARAN $datas[5]</b></p></td>";
	echo"</tr>"; 
	echo"</table>"; echo"</br>"; echo"</br>";
	
	//echo"<p align='center'>";
	echo"<table border='3' bordercolor='black'>";
	echo"<tr>";
	echo"<td rowspan='3'><p align='center'><b>No.</b></p></td>";
	echo"<td rowspan='3' width='200px'><p align='center'><b>Nama</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Agama</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>PKN</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Bahasa Indonesia</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Matematika</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>SBP</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>PJOK</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>Bahasa Daerah</b></p></td>";
	/*echo"<td colspan='4'><p align='center'><b>IPA</b></p></td>";
	echo"<td colspan='4'><p align='center'><b>IPS</b></p></td>";*/
	echo"</tr>";
	echo"<tr>";
	for($i=0; $i<7; $i++)
	{
		echo"<td colspan='2' width='400'><p align='center'><b>Pengetahuan(KI 3)</b></p></td>";
		echo"<td colspan='2' width='400'><p align='center'><b>Keterampilan(KI 4)</b></p></td>";	
	}
	echo"</tr>";
	echo"<tr>";
	for($j=0; $j<14; $j++)
	{
		echo"<td><p align='center'><b>NA</b></p></td>";
		echo"<td><p align='center'><b>Predikat</b></p></td>";
	}
	echo"</tr>";
	echo"<tr>";
	
	$query="SELECT * FROM data_siswa"; $hasil=mysql_query($query) or die(mysql_error()); 
	
	//$querysres="SELECT * FROM data_siswa WHERE nama_siswa='$data[2]'"; //$hasilres=mysql_query($queryres) or die(mysql_error()); $hasilcari=mysql_num_rows($hasilres);
	
	while(($data=mysql_fetch_array($hasil)) and ($datapipa=mysql_fetch_array ($hasilpipa)) and ($datapips=mysql_fetch_array ($hasilpips)) and ($datapagama=mysql_fetch_array ($hasilpagama)) and
			($datapmtk=mysql_fetch_array ($hasilpmtk)) and ($datapbi=mysql_fetch_array ($hasilpbi)) and ($datappkn=mysql_fetch_array ($hasilppkn)) and
			($datapsbp=mysql_fetch_array ($hasilpsbp)) and ($datapbd=mysql_fetch_array ($hasilpbd)) and ($datappjok=mysql_fetch_array ($hasilppjok)) and
			($datakipa=mysql_fetch_array ($hasilkipa)) and ($datakips=mysql_fetch_array ($hasilkips)) and ($datakagama=mysql_fetch_array ($hasilkagama)) and
			($datakmtk=mysql_fetch_array ($hasilkmtk)) and ($datakbi=mysql_fetch_array ($hasilkbi)) and ($datakpkn=mysql_fetch_array ($hasilkpkn)) and
			($dataksbp=mysql_fetch_array ($hasilksbp)) and ($datakbd=mysql_fetch_array ($hasilkbd)) and ($datakpjok=mysql_fetch_array ($hasilkpjok))   )
	{		
			$koneksi1=mysql_connect("localhost","root","") or die(mysql_error());
			mysql_select_db("raportk13_5",$koneksi1) or die(mysql_error());
			$queryres="SELECT * FROM data_siswa WHERE no_induk='$data[1]'"; $hasilres=mysql_query($queryres) or die(mysql_error()); $hasilcari=mysql_num_rows($hasilres);
			
		if($hasilcari!=1)
		{
			echo"<tr>";
			echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$data[0]'>$data[0]</p></td>";
			echo"<td><input type='hidden' name='nama[]'size='50' value='$data[3]'> $data[3] </td>";
			echo"<td><input type='hidden' size='50' value='$datapagama[12]'> $datapagama[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapagama[14]'> $datapagama[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakagama[12]'> $datakagama[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakagama[14]'> $datakagama[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datappkn[12]'> $datappkn[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datappkn[14]'> $datappkn[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpkn[12]'> $datakpkn[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpkn[14]'> $datakpkn[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapbi[12]'> $datapbi[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapbi[14]'> $datapbi[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbi[12]'> $datakbi[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbi[14]'> $datakbi[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapmtk[12]'> $datapmtk[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapmtk[14]'> $datapmtk[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakmtk[12]'> $datakmtk[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakmtk[14]'> $datakmtk[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapsbp[12]'> $datapsbp[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapsbp[14]'> $datapsbp[14] </td>";
			echo"<td><input type='hidden' size='50' value='$dataksbp[12]'> $dataksbp[12] </td>";
			echo"<td><input type='hidden' size='50' value='$dataksbp[14]'> $dataksbp[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datappjok[12]'> $datappjok[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datappjok[14]'> $datappjok[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpjok[12]'> $datakpjok[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpjok[14]'> $datakpjok[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapbd[12]'> $datapbd[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapbd[14]'> $datapbd[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbd[12]'> $datakbd[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbd[14]'> $datakbd[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapipa[12]'> $datapipa[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapipa[14]'> $datapipa[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakipa[12]'> $datakipa[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakipa[14]'> $datakipa[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapips[12]'> $datapips[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapips[14]'> $datapips[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakips[12]'> $datakips[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakips[14]'> $datakips[14] </td>";
			echo"<td><a href='naikkelas.php?noabsen=$data[0]' class='btn btn-danger' >Naik Kelas</a></td>";
			echo"<td><a href='cetakraport.php?noabsen=$data[0]' class='btn btn-primary'>Cetak Raport</a></td>";
			//echo"<td><input type='checkbox' name='nipd[]' value='$data[2]'></td>";
			echo"</tr>";
		}
		
		else if($hasilcari=1)
		{	

			echo"<tr>";
			echo"<td width='40' height='40'><p align='center'><input type='hidden' name='nabsen[]'value='$datapipa[0]'>$datapipa[0]</p></td>";
			echo"<td><input type='hidden' name='nama[]'size='50' value='$data[3]'> $data[3] </td>";
			echo"<td><input type='hidden' size='50' value='$datapagama[12]'> $datapagama[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapagama[14]'> $datapagama[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakagama[12]'> $datakagama[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakagama[14]'> $datakagama[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datappkn[12]'> $datappkn[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datappkn[14]'> $datappkn[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpkn[12]'> $datakpkn[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpkn[14]'> $datakpkn[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapbi[12]'> $datapbi[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapbi[14]'> $datapbi[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbi[12]'> $datakbi[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbi[14]'> $datakbi[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapmtk[12]'> $datapmtk[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapmtk[14]'> $datapmtk[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakmtk[12]'> $datakmtk[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakmtk[14]'> $datakmtk[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapsbp[12]'> $datapsbp[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapsbp[14]'> $datapsbp[14] </td>";
			echo"<td><input type='hidden' size='50' value='$dataksbp[12]'> $dataksbp[12] </td>";
			echo"<td><input type='hidden' size='50' value='$dataksbp[14]'> $dataksbp[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datappjok[12]'> $datappjok[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datappjok[14]'> $datappjok[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpjok[12]'> $datakpjok[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakpjok[14]'> $datakpjok[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapbd[12]'> $datapbd[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapbd[14]'> $datapbd[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbd[12]'> $datakbd[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakbd[14]'> $datakbd[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapipa[12]'> $datapipa[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapipa[14]'> $datapipa[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakipa[12]'> $datakipa[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakipa[14]'> $datakipa[14] </td>";
			
			echo"<td><input type='hidden' size='50' value='$datapips[12]'> $datapips[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datapips[14]'> $datapips[14] </td>";
			echo"<td><input type='hidden' size='50' value='$datakips[12]'> $datakips[12] </td>";
			echo"<td><input type='hidden' size='50' value='$datakips[14]'> $datakips[14] </td>";
			echo"<td><button class='btn btn-success' >Sudah Naik Kelas</button></td>";
			echo"<td><a href='cetakraport.php?noabsen=$data[0]' class='btn btn-primary'>Cetak Raport</a></td>";
			//echo"<td><input type='checkbox' name='nipd[]' value='$data[2]'></td>";
			echo"</tr>";
		}
	}			
	echo"</tr>";
	echo"</table><br>";

	echo"</form>";
	include"bawah.php";
	
mysql_close($koneksi);
?>