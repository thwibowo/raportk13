<?php
	
	$noabsen = $_GET['noabsen'];
	
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_3",$koneksi) or die(mysql_error());
	$querykkm = "SELECT * FROM kkm"; $hasilkkm=mysql_query($querykkm) or die(mysql_error()); $datakkm=mysql_fetch_array ($hasilkkm);
	$querygk="SELECT * FROM data_gurukelas"; $hasilgk=mysql_query($querygk) or die(mysql_error()); $datagk=mysql_fetch_array ($hasilgk);
	$querys="SELECT * FROM data_sekolah"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$queryds="SELECT * FROM data_siswa WHERE no_absen='$noabsen'"; $hasilds=mysql_query($queryds) or die(mysql_error()); $datads=mysql_fetch_array ($hasilds);
	/*echo $datagk[4]; echo "</br>";
	echo $datagk[5]; echo"</br>";
	echo $noabsen; echo" </br>";*/
	if($datagk[4]==1)
	{
		//$querypips="SELECT*FROM nilai_peng_ips_ganjil WHERE tahun_ajaran ='$datads[5]' AND no_absen='$noabsen'"; $hasilpips=mysql_query($querypips) or die(mysql_error()); $datapipa=mysql_fetch_array ($hasilpipa);
		//$querypipa="SELECT*FROM nilai_peng_ipa_ganjil WHERE tahun_ajaran ='$datads[5]' AND no_absen='$noabsen'"; $hasilpipa=mysql_query($querypipa) or die(mysql_error()); $datapips=mysql_fetch_array ($hasilpips);
		$querypagama="SELECT*FROM nilai_peng_agama_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpagama=mysql_query($querypagama) or die(mysql_error()); $datapagama=mysql_fetch_array ($hasilpagama);
		$querypbi="SELECT*FROM nilai_peng_bi_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpbi=mysql_query($querypbi) or die(mysql_error()); $datapbi=mysql_fetch_array ($hasilpbi);
		$querypbd="SELECT*FROM nilai_peng_bd_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpbd=mysql_query($querypbd) or die(mysql_error()); $datapbd=mysql_fetch_array ($hasilpbd);
		$querypmtk="SELECT*FROM nilai_peng_mtk_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpmtk=mysql_query($querypmtk) or die(mysql_error()); $datapmtk=mysql_fetch_array ($hasilpmtk);
		$queryppkn="SELECT*FROM nilai_peng_pkn_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilppkn=mysql_query($queryppkn) or die(mysql_error()); $datappkn=mysql_fetch_array ($hasilppkn);
		$querypsbp="SELECT*FROM nilai_peng_sbp_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpsbp=mysql_query($querypsbp) or die(mysql_error()); $datapsbp=mysql_fetch_array ($hasilpsbp);
		$queryppjok="SELECT*FROM nilai_peng_pjok_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilppjok=mysql_query($queryppjok) or die(mysql_error()); $datappjok=mysql_fetch_array ($hasilppjok);
		
		//$querykips="SELECT*FROM nilai_ket_ips_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkips=mysql_query($querykips) or die(mysql_error()); $datakipa=mysql_fetch_array ($hasilkipa);
		//$querykipa="SELECT*FROM nilai_ket_ipa_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkipa=mysql_query($querykipa) or die(mysql_error()); $datakips=mysql_fetch_array ($hasilkips);
		$querykagama="SELECT*FROM nilai_ket_agama_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkagama=mysql_query($querykagama) or die(mysql_error()); $datakagama=mysql_fetch_array ($hasilkagama);
		$querykbi="SELECT*FROM nilai_ket_bi_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkbi=mysql_query($querykbi) or die(mysql_error()); $datakbi=mysql_fetch_array ($hasilkbi);
		$querykbd="SELECT*FROM nilai_ket_bd_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkbd=mysql_query($querykbd) or die(mysql_error()); $datakbd=mysql_fetch_array ($hasilkbd);
		$querykmtk="SELECT*FROM nilai_ket_mtk_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkmtk=mysql_query($querykmtk) or die(mysql_error()); $datakmtk=mysql_fetch_array ($hasilkmtk);
		$querykpkn="SELECT*FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkpkn=mysql_query($querykpkn) or die(mysql_error()); $datakpkn=mysql_fetch_array ($hasilkpkn);
		$queryksbp="SELECT*FROM nilai_ket_sbp_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilksbp=mysql_query($queryksbp) or die(mysql_error()); $dataksbp=mysql_fetch_array ($hasilksbp);
		$querykpjok="SELECT*FROM nilai_ket_pjok_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkpjok=mysql_query($querykpjok) or die(mysql_error()); $datakpjok=mysql_fetch_array ($hasilkpjok); 		
		
		$querysos="SELECT*FROM nilai_sosial_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilsos=mysql_query($querysos) or die(mysql_error()); $datasos=mysql_fetch_array ($hasilsos);
		$queryspit="SELECT*FROM nilai_spiritual_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilspit=mysql_query($queryspit) or die(mysql_error()); $dataspit=mysql_fetch_array ($hasilspit);
		$queryekskul="SELECT*FROM ekskul_dan_saran WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilekskul=mysql_query($queryekskul) or die(mysql_error()); $dataekskul=mysql_fetch_array ($hasilekskul);
		$querykesehatan="SELECT*FROM data_kesehatan WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkesehatan=mysql_query($querykesehatan) or die(mysql_error()); $datakesehatan=mysql_fetch_array ($hasilkesehatan);
		$querydaftarhadir="SELECT*FROM daftar_hadir WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasildaftarhadir=mysql_query($querydaftarhadir) or die(mysql_error()); $datadaftarhadir=mysql_fetch_array ($hasildaftarhadir);
	
			//echo $dataspit[20];
		$thn= substr ($datads[5],0,4); //ambil tahun lahir
		$bln= substr ($datads[5],5,2); //ambil bulan lahir
		$tgl= substr ($datads[5],8,2); //ambil tanggal lahir
		$tgllahir = $tgl."-".$bln."-".$thn;
		
		$thnt= substr ($datagk[6],0,4); //ambil tahun lahir
		$blnt= substr ($datagk[6],5,2); //ambil bulan lahir
		$tglt= substr ($datagk[6],8,2); //ambil tanggal lahir
		$tgltulis = $tglt."-".$blnt."-".$thnt;
		
		//pengisian template raport!!!!!!!!!!!!!!!
		require_once 'Classes/PHPExcel.php'; 	// panggil library PHPExcel
		//$objPHPExcel = new PHPExcel(); 		// buat obyek dari kelas PHPExcel
		$objPHPExcel = PHPExcel_IOFactory::load("templateraportganjil.xlsx");
		
		/*$objPHPExcel->setActiveSheetIndex(0); 		// sheet pertama sbg sheet aktif
		$worksheet = $objPHPExcel->getActiveSheet();
		$worksheet->setTitle('Perincian Gaji'); 		// beri nama sheet
		//$worksheet->setCellValueByColumnAndRow(5, 4, 'Weni Suciyana'); */
		
		$objPHPExcel->setActiveSheetIndex(0); 		// sheet pertama sbg sheet aktif
		$worksheet = $objPHPExcel->getActiveSheet();
		$worksheet->setTitle('Raport Smester 1'); 		// beri nama sheet

		//Isi Cell
		$worksheet->setCellValue('A23',$datads[3]);
		$worksheet->setCellValue('A28',$datads[2]);
		
		/*$worksheet->setCellValue('F39',$datads[3]);
		$worksheet->setCellValue('F40',$datads[2]);
		$worksheet->setCellValue('F41',$datads[4]);
		$worksheet->setCellValue('J41',$tgllahir);
		$worksheet->setCellValue('F43',$datads[6]);
		$worksheet->setCellValue('F44',$datads[7]);
		$worksheet->setCellValue('F45',$datads[9]);
		$worksheet->setCellValue('F47',$datads[10]);
		$worksheet->setCellValue('F48',$datads[11]);
		$worksheet->setCellValue('F50',$datads[12]);
		$worksheet->setCellValue('F51',$datads[13]);
		$worksheet->setCellValue('F53',$datads[14]);
		$worksheet->setCellValue('F54',$datads[15]);
		$worksheet->setCellValue('F55',$datads[16]);
		$worksheet->setCellValue('F56',$datads[17]);
		$worksheet->setCellValue('F57',$datads[18]);
		$worksheet->setCellValue('F59',$datads[19]);
		$worksheet->setCellValue('F60',$datads[20]);
		$worksheet->setCellValue('F61',$datads[21]);
		$worksheet->setCellValue('M64',$tgltulis);
		$worksheet->setCellValue('K66',$datas[12]);
		$worksheet->setCellValue('L70',$datas[13]);*/
		
		$worksheet->setCellValue('E76',$datads[3]);
		$worksheet->setCellValue('E77',$datads[2]);
		$worksheet->setCellValue('E78',$datas[1]);
		$worksheet->setCellValue('E79',$datas[3]);
		$worksheet->setCellValue('N76',$datagk[3]);
		$worksheet->setCellValue('N77',$datagk[4]);
		$worksheet->setCellValue('N78',$datagk[5]);
		
		$worksheet->setCellValue('E85',$dataspit[20]);
		$worksheet->setCellValue('E86',$datasos[16]); 
		
		$worksheet->setCellValue('D92',$datapagama[12]);
		$worksheet->setCellValue('E92',$datapagama[14]);
		$worksheet->setCellValue('F92',$datapagama[15].'. '.$datapagama[16]);
		$worksheet->setCellValue('K92',$datakagama[12]);
		$worksheet->setCellValue('L92',$datakagama[14]);
		$worksheet->setCellValue('M92',$datakagama[15].'. '.$datakagama[16]);
		
		$worksheet->setCellValue('D119',$datappkn[12]);
		$worksheet->setCellValue('E119',$datappkn[14]);
		$worksheet->setCellValue('F119',$datappkn[15].'. '.$datappkn[16]);
		$worksheet->setCellValue('K119',$datakpkn[12]);
		$worksheet->setCellValue('L119',$datakpkn[14]);
		$worksheet->setCellValue('M119',$datakpkn[15].'. '.$datakpkn[16]);
		
		$worksheet->setCellValue('D127',$datapbi[12]);
		$worksheet->setCellValue('E127',$datapbi[14]);
		$worksheet->setCellValue('F127',$datapbi[15].'. '.$datapbi[16]);
		$worksheet->setCellValue('K127',$datakbi[12]);
		$worksheet->setCellValue('L127',$datakbi[14]);
		$worksheet->setCellValue('M127',$datakbi[15].'. '.$datakbi[16]);
		
		$worksheet->setCellValue('D137',$datapmtk[12]);
		$worksheet->setCellValue('E137',$datapmtk[14]);
		$worksheet->setCellValue('F137',$datapmtk[15].'. '.$datapmtk[16]);
		$worksheet->setCellValue('K137',$datakmtk[12]);
		$worksheet->setCellValue('L137',$datakmtk[14]);
		$worksheet->setCellValue('M137',$datakmtk[15].'. '.$datakmtk[16]);
		
		$worksheet->setCellValue('D225',$datapsbp[12]);
		$worksheet->setCellValue('E225',$datapsbp[14]);
		$worksheet->setCellValue('F225',$datapsbp[15].'. '.$datapsbp[16]);
		$worksheet->setCellValue('K225',$dataksbp[12]);
		$worksheet->setCellValue('L225',$dataksbp[14]);
		$worksheet->setCellValue('M225',$dataksbp[15].'. '.$dataksbp[16]);
		
		$worksheet->setCellValue('D234',$datappjok[12]);
		$worksheet->setCellValue('E234',$datappjok[14]);
		$worksheet->setCellValue('F234',$datappjok[15].'. '.$datappjok[16]);
		$worksheet->setCellValue('K234',$datakpjok[12]);
		$worksheet->setCellValue('L234',$datakpjok[14]);
		$worksheet->setCellValue('M234',$datakpjok[15].'. '.$datakpjok[16]);
		
		$worksheet->setCellValue('D243',$datapbd[12]);
		$worksheet->setCellValue('E243',$datapbd[14]);
		$worksheet->setCellValue('F243',$datapbd[15].'. '.$datapbd[16]);
		$worksheet->setCellValue('K243',$datakbd[12]);
		$worksheet->setCellValue('L243',$datakbd[14]);
		$worksheet->setCellValue('M243',$datakbd[15].'. '.$datakbd[16]);
		
		$worksheet->setCellValue('B269',$dataekskul[3]);
		$worksheet->setCellValue('B270',$dataekskul[4]);
		$worksheet->setCellValue('B271',$dataekskul[5]);
		$worksheet->setCellValue('B272',$dataekskul[6]);
		$worksheet->setCellValue('B273',$dataekskul[7]);
		
		$worksheet->setCellValue('B278',$dataekskul[9]);
		
		if($datagk[4]==1)
		{
			$worksheet->setCellValue('F287',$datakesehatan[3]);
			$worksheet->setCellValue('F288',$datakesehatan[5]);
		}
		else if($datagk[4]==2)
		{
			$worksheet->setCellValue('J287',$datakesehatan[4]);
			$worksheet->setCellValue('J288',$datakesehatan[6]);
		}
		
		$worksheet->setCellValue('F294',$datakesehatan[7]);
		$worksheet->setCellValue('F295',$datakesehatan[8]);
		$worksheet->setCellValue('F296',$datakesehatan[9]);
		$worksheet->setCellValue('F297',$datakesehatan[10]);
		
		$worksheet->setCellValue('N302',$datadaftarhadir[3]);
		$worksheet->setCellValue('N303',$datadaftarhadir[4]);
		$worksheet->setCellValue('N304',$datadaftarhadir[5]);
		
		// redirect output to browser
		header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="raport_kelas3_ganjil.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); // 2007 untuk ex2007, 5 untuk versi excel seterusnya
		$objWriter->save('php://output');
	}
	else if($datagk[4]==2)
	{
		
		$querypagama1="SELECT*FROM nilai_peng_agama_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpagama1=mysql_query($querypagama1) or die(mysql_error()); $datapagama1=mysql_fetch_array ($hasilpagama1);
		$querypbi1="SELECT*FROM nilai_peng_bi_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpbi1=mysql_query($querypbi1) or die(mysql_error()); $datapbi1=mysql_fetch_array ($hasilpbi1);
		$querypbd1="SELECT*FROM nilai_peng_bd_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpbd1=mysql_query($querypbd1) or die(mysql_error()); $datapbd1=mysql_fetch_array ($hasilpbd1);
		$querypmtk1="SELECT*FROM nilai_peng_mtk_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpmtk1=mysql_query($querypmtk1) or die(mysql_error()); $datapmtk1=mysql_fetch_array ($hasilpmtk1);
		$queryppkn1="SELECT*FROM nilai_peng_pkn_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilppkn1=mysql_query($queryppkn1) or die(mysql_error()); $datappkn1=mysql_fetch_array ($hasilppkn1);
		$querypsbp1="SELECT*FROM nilai_peng_sbp_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpsbp1=mysql_query($querypsbp1) or die(mysql_error()); $datapsbp1=mysql_fetch_array ($hasilpsbp1);
		$queryppjok1="SELECT*FROM nilai_peng_pjok_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilppjok1=mysql_query($queryppjok1) or die(mysql_error()); $datappjok1=mysql_fetch_array ($hasilppjok1);
		
		$querykagama1="SELECT*FROM nilai_ket_agama_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkagama1=mysql_query($querykagama1) or die(mysql_error()); $datakagama1=mysql_fetch_array ($hasilkagama1);
		$querykbi1="SELECT*FROM nilai_ket_bi_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkbi1=mysql_query($querykbi1) or die(mysql_error()); $datakbi1=mysql_fetch_array ($hasilkbi1);
		$querykbd1="SELECT*FROM nilai_ket_bd_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkbd1=mysql_query($querykbd1) or die(mysql_error()); $datakbd1=mysql_fetch_array ($hasilkbd1);
		$querykmtk1="SELECT*FROM nilai_ket_mtk_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkmtk1=mysql_query($querykmtk1) or die(mysql_error()); $datakmtk1=mysql_fetch_array ($hasilkmtk1);
		$querykpkn1="SELECT*FROM nilai_ket_pkn_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkpkn1=mysql_query($querykpkn1) or die(mysql_error()); $datakpkn1=mysql_fetch_array ($hasilkpkn1);
		$queryksbp1="SELECT*FROM nilai_ket_sbp_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilksbp1=mysql_query($queryksbp1) or die(mysql_error()); $dataksbp1=mysql_fetch_array ($hasilksbp1);
		$querykpjok1="SELECT*FROM nilai_ket_pjok_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkpjok1=mysql_query($querykpjok1) or die(mysql_error()); $datakpjok1=mysql_fetch_array ($hasilkpjok1); 		
		
		$querysos1="SELECT*FROM nilai_sosial_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilsos1=mysql_query($querysos1) or die(mysql_error()); $datasos1=mysql_fetch_array ($hasilsos1);
		$queryspit1="SELECT*FROM nilai_spiritual_ganjil WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilspit1=mysql_query($queryspit1) or die(mysql_error()); $dataspit1=mysql_fetch_array ($hasilspit1);
		$queryekskul1="SELECT*FROM ekskul_dan_saran WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilekskul1=mysql_query($queryekskul1) or die(mysql_error()); $dataekskul1=mysql_fetch_array ($hasilekskul1);
		$querykesehatan1="SELECT*FROM data_kesehatan WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkesehatan1=mysql_query($querykesehatan1) or die(mysql_error()); $datakesehatan1=mysql_fetch_array ($hasilkesehatan1);
		$querydaftarhadir1="SELECT*FROM daftar_hadir WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasildaftarhadir1=mysql_query($querydaftarhadir1) or die(mysql_error()); $datadaftarhadir1=mysql_fetch_array ($hasildaftarhadir1);
	
		//$querypips="SELECT*FROM nilai_peng_ips_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpips=mysql_query($querypips) or die(mysql_error()); $datapipa=mysql_fetch_array ($hasilpipa);
		//$querypipa="SELECT*FROM nilai_peng_ipa_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpipa=mysql_query($querypipa) or die(mysql_error()); $datapips=mysql_fetch_array ($hasilpips);
		$querypagama="SELECT*FROM nilai_peng_agama_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpagama=mysql_query($querypagama) or die(mysql_error()); $datapagama=mysql_fetch_array ($hasilpagama);
		$querypbi="SELECT*FROM nilai_peng_bi_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpbi=mysql_query($querypbi) or die(mysql_error()); $datapbi=mysql_fetch_array ($hasilpbi);
		$querypbd="SELECT*FROM nilai_peng_bd_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpbd=mysql_query($querypbd) or die(mysql_error()); $datapbd=mysql_fetch_array ($hasilpbd);
		$querypmtk="SELECT*FROM nilai_peng_mtk_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpmtk=mysql_query($querypmtk) or die(mysql_error()); $datapmtk=mysql_fetch_array ($hasilpmtk);
		$queryppkn="SELECT*FROM nilai_peng_pkn_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilppkn=mysql_query($queryppkn) or die(mysql_error()); $datappkn=mysql_fetch_array ($hasilppkn);
		$querypsbp="SELECT*FROM nilai_peng_sbp_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilpsbp=mysql_query($querypsbp) or die(mysql_error()); $datapsbp=mysql_fetch_array ($hasilpsbp);
		$queryppjok="SELECT*FROM nilai_peng_pjok_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilppjok=mysql_query($queryppjok) or die(mysql_error()); $datappjok=mysql_fetch_array ($hasilppjok);
		
		//$querykips="SELECT*FROM nilai_ket_ips_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkips=mysql_query($querykips) or die(mysql_error()); $datakipa=mysql_fetch_array ($hasilkipa);
		//$querykipa="SELECT*FROM nilai_ket_ipa_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkipa=mysql_query($querykipa) or die(mysql_error()); $datakips=mysql_fetch_array ($hasilkips);
		$querykagama="SELECT*FROM nilai_ket_agama_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkagama=mysql_query($querykagama) or die(mysql_error()); $datakagama=mysql_fetch_array ($hasilkagama);
		$querykbi="SELECT*FROM nilai_ket_bi_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkbi=mysql_query($querykbi) or die(mysql_error()); $datakbi=mysql_fetch_array ($hasilkbi);
		$querykbd="SELECT*FROM nilai_ket_bd_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkbd=mysql_query($querykbd) or die(mysql_error()); $datakbd=mysql_fetch_array ($hasilkbd);
		$querykmtk="SELECT*FROM nilai_ket_mtk_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkmtk=mysql_query($querykmtk) or die(mysql_error()); $datakmtk=mysql_fetch_array ($hasilkmtk);
		$querykpkn="SELECT*FROM nilai_ket_pkn_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkpkn=mysql_query($querykpkn) or die(mysql_error()); $datakpkn=mysql_fetch_array ($hasilkpkn);
		$queryksbp="SELECT*FROM nilai_ket_sbp_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilksbp=mysql_query($queryksbp) or die(mysql_error()); $dataksbp=mysql_fetch_array ($hasilksbp);
		$querykpjok="SELECT*FROM nilai_ket_pjok_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkpjok=mysql_query($querykpjok) or die(mysql_error());  $datakpjok=mysql_fetch_array ($hasilkpjok);		
	
		$querysos="SELECT*FROM nilai_sosial_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilsos=mysql_query($querysos) or die(mysql_error()); $datasos=mysql_fetch_array ($hasilsos);
		$queryspit="SELECT*FROM nilai_spiritual_genap WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilspit=mysql_query($queryspit) or die(mysql_error()); $dataspit=mysql_fetch_array ($hasilspit);
		$queryekskul="SELECT*FROM ekskul_dan_saran WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilekskul=mysql_query($queryekskul) or die(mysql_error()); $dataekskul=mysql_fetch_array ($hasilekskul);
		$querykesehatan="SELECT*FROM data_kesehatan WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasilkesehatan=mysql_query($querykesehatan) or die(mysql_error()); $datakesehatan=mysql_fetch_array ($hasilkesehatan);
		$querydaftarhadir="SELECT*FROM daftar_hadir WHERE tahun_ajaran ='$datagk[5]' AND no_absen='$noabsen'"; $hasildaftarhadir=mysql_query($querydaftarhadir) or die(mysql_error()); $datadaftarhadir=mysql_fetch_array ($hasildaftarhadir);

			//echo $dataspit[20];
		$thn= substr ($datads[5],0,4); //ambil tahun lahir
		$bln= substr ($datads[5],5,2); //ambil bulan lahir
		$tgl= substr ($datads[5],8,2); //ambil tanggal lahir
		$tgllahir = $tgl."-".$bln."-".$thn;
		
		$thnt= substr ($datagk[6],0,4); //ambil tahun lahir
		$blnt= substr ($datagk[6],5,2); //ambil bulan lahir
		$tglt= substr ($datagk[6],8,2); //ambil tanggal lahir
		$tgltulis = $tglt."-".$blnt."-".$thnt;
		
		//pengisian template raport!!!!!!!!!!!!!!!
		require_once 'Classes/PHPExcel.php'; 	// panggil library PHPExcel
		//$objPHPExcel = new PHPExcel(); 		// buat obyek dari kelas PHPExcel
		$objPHPExcel = PHPExcel_IOFactory::load("templateraportgenap.xlsx");
		
		/*$objPHPExcel->setActiveSheetIndex(0); 		// sheet pertama sbg sheet aktif
		$worksheet = $objPHPExcel->getActiveSheet();
		$worksheet->setTitle('Perincian Gaji'); 		// beri nama sheet
		//$worksheet->setCellValueByColumnAndRow(5, 4, 'Weni Suciyana'); */
		
		$objPHPExcel->setActiveSheetIndex(0); 		// sheet pertama sbg sheet aktif
		$worksheet = $objPHPExcel->getActiveSheet();
		$worksheet->setTitle('Raport Smester 1'); 		// beri nama sheet

		//Isi Cell
		$worksheet->setCellValue('A23',$datads[3]);
		$worksheet->setCellValue('A28',$datads[2]);
		
		/*$worksheet->setCellValue('F39',$datads[3]);
		$worksheet->setCellValue('F40',$datads[2]);
		$worksheet->setCellValue('F41',$datads[4]);
		$worksheet->setCellValue('J41',$tgllahir);
		$worksheet->setCellValue('F43',$datads[6]);
		$worksheet->setCellValue('F44',$datads[7]);
		$worksheet->setCellValue('F45',$datads[9]);
		$worksheet->setCellValue('F47',$datads[10]);
		$worksheet->setCellValue('F48',$datads[11]);
		$worksheet->setCellValue('F50',$datads[12]);
		$worksheet->setCellValue('F51',$datads[13]);
		$worksheet->setCellValue('F53',$datads[14]);
		$worksheet->setCellValue('F54',$datads[15]);
		$worksheet->setCellValue('F55',$datads[16]);
		$worksheet->setCellValue('F56',$datads[17]);
		$worksheet->setCellValue('F57',$datads[18]);
		$worksheet->setCellValue('F59',$datads[19]);
		$worksheet->setCellValue('F60',$datads[20]);
		$worksheet->setCellValue('F61',$datads[21]);
		$worksheet->setCellValue('M64',$tgltulis);
		$worksheet->setCellValue('K66',$datas[12]);
		$worksheet->setCellValue('L70',$datas[13]);*/
		
		$worksheet->setCellValue('E76',$datads[3]);
		$worksheet->setCellValue('E77',$datads[2]);
		$worksheet->setCellValue('E78',$datas[1]);
		$worksheet->setCellValue('E79',$datas[3]);
		$worksheet->setCellValue('N76',$datagk[3]);
		$worksheet->setCellValue('N77',$datagk[4]);
		$worksheet->setCellValue('N78',$datagk[5]);
		
		$worksheet->setCellValue('E85',$dataspit[20]);
		$worksheet->setCellValue('E86',$datasos[16]); 
		
		$worksheet->setCellValue('D92',$datapagama[12]);
		$worksheet->setCellValue('E92',$datapagama[14]);
		$worksheet->setCellValue('F92',$datapagama[15].'. '.$datapagama[16]);
		$worksheet->setCellValue('K92',$datakagama[12]);
		$worksheet->setCellValue('L92',$datakagama[14]);
		$worksheet->setCellValue('M92',$datakagama[15].'. '.$datakagama[16]);
		
		$worksheet->setCellValue('D119',$datappkn[12]);
		$worksheet->setCellValue('E119',$datappkn[14]);
		$worksheet->setCellValue('F119',$datappkn[15].'. '.$datappkn[16]);
		$worksheet->setCellValue('K119',$datakpkn[12]);
		$worksheet->setCellValue('L119',$datakpkn[14]);
		$worksheet->setCellValue('M119',$datakpkn[15].'. '.$datakpkn[16]);
		
		$worksheet->setCellValue('D127',$datapbi[12]);
		$worksheet->setCellValue('E127',$datapbi[14]);
		$worksheet->setCellValue('F127',$datapbi[15].'. '.$datapbi[16]);
		$worksheet->setCellValue('K127',$datakbi[12]);
		$worksheet->setCellValue('L127',$datakbi[14]);
		$worksheet->setCellValue('M127',$datakbi[15].'. '.$datakbi[16]);
		
		$worksheet->setCellValue('D137',$datapmtk[12]);
		$worksheet->setCellValue('E137',$datapmtk[14]);
		$worksheet->setCellValue('F137',$datapmtk[15].'. '.$datapmtk[16]);
		$worksheet->setCellValue('K137',$datakmtk[12]);
		$worksheet->setCellValue('L137',$datakmtk[14]);
		$worksheet->setCellValue('M137',$datakmtk[15].'. '.$datakmtk[16]);
		
		$worksheet->setCellValue('D225',$datapsbp[12]);
		$worksheet->setCellValue('E225',$datapsbp[14]);
		$worksheet->setCellValue('F225',$datapsbp[15].'. '.$datapsbp[16]);
		$worksheet->setCellValue('K225',$dataksbp[12]);
		$worksheet->setCellValue('L225',$dataksbp[14]);
		$worksheet->setCellValue('M225',$dataksbp[15].'. '.$dataksbp[16]);
		
		$worksheet->setCellValue('D234',$datappjok[12]);
		$worksheet->setCellValue('E234',$datappjok[14]);
		$worksheet->setCellValue('F234',$datappjok[15].'. '.$datappjok[16]);
		$worksheet->setCellValue('K234',$datakpjok[12]);
		$worksheet->setCellValue('L234',$datakpjok[14]);
		$worksheet->setCellValue('M234',$datakpjok[15].'. '.$datakpjok[16]);
		
		$worksheet->setCellValue('D243',$datapbd[12]);
		$worksheet->setCellValue('E243',$datapbd[14]);
		$worksheet->setCellValue('F243',$datapbd[15].'. '.$datapbd[16]);
		$worksheet->setCellValue('K243',$datakbd[12]);
		$worksheet->setCellValue('L243',$datakbd[14]);
		$worksheet->setCellValue('M243',$datakbd[15].'. '.$datakbd[16]);
		
		$worksheet->setCellValue('B269',$dataekskul[3]);
		$worksheet->setCellValue('B270',$dataekskul[4]);
		$worksheet->setCellValue('B271',$dataekskul[5]);
		$worksheet->setCellValue('B272',$dataekskul[6]);
		$worksheet->setCellValue('B273',$dataekskul[7]);
		
		$worksheet->setCellValue('B278',$dataekskul[9]);
		
		if($datagk[4]==1)
		{
			$worksheet->setCellValue('F287',$datakesehatan[3]);
			$worksheet->setCellValue('F288',$datakesehatan[5]);
		}
		else if($datagk[4]==2)
		{
			$worksheet->setCellValue('J287',$datakesehatan[4]);
			$worksheet->setCellValue('J288',$datakesehatan[6]);
		}
		
		$worksheet->setCellValue('F294',$datakesehatan[7]);
		$worksheet->setCellValue('F295',$datakesehatan[8]);
		$worksheet->setCellValue('F296',$datakesehatan[9]);
		$worksheet->setCellValue('F297',$datakesehatan[10]);
		
		$worksheet->setCellValue('N302',$datadaftarhadir[3]);
		$worksheet->setCellValue('N303',$datadaftarhadir[4]);
		$worksheet->setCellValue('N304',$datadaftarhadir[5]);
		
		$totalpeng1 = ($datapagama1[12]+$datappkn1[12]+$datapbi1[12]+$datapmtk1[12]+$datapsbp1[12]+$datappjok1[12]+$datapbd1[12])/7;
		$totalket1 = ($datakagama1[12]+$datakpkn1[12]+$datakbi1[12]+$datakmtk1[12]+$dataksbp1[12]+$datakpjok1[12]+$datakbd1[12])/7;
		
		$totalpeng = ($datapagama[12]+$datappkn[12]+$datapbi[12]+$datapmtk[12]+$datapsbp[12]+$datappjok[12]+$datapbd[12])/7;
		$totalket = ($datakagama[12]+$datakpkn[12]+$datakbi[12]+$datakmtk[12]+$dataksbp[12]+$datakpjok[12]+$datakbd[12])/7;
		//echo $totalpeng;echo"</br>";
		//echo $totalket;echo"</br>";
		//echo $datakkm[0];echo"</br>";

		if (($totalpeng >= $datakkm[0]) and ($totalket >= $datakkm[0]) and ($datadaftarhadir[5]<=3)
			and ($totalpeng1 >= $datakkm[0]) and ($totalket1 >= $datakkm[0]) and ($datadaftarhadir1[5]<=3))
		{
			$worksheet->setCellValue('G313','4');
			$worksheet->setCellValue('H313','( Empat )');
			//echo"LULUSSSS</br>";
		}
		else if (($totalpeng >= $datakkm[0]) and ($totalket >= $datakkm[0]) and ($datadaftarhadir[5]>>3)
			and ($totalpeng1 >= $datakkm[0]) and ($totalket1 >= $datakkm[0]) and ($datadaftarhadir1[5]>>3))
		{
			$worksheet->setCellValue('G314','3');
			$worksheet->setCellValue('H314','( Tiga )');
			//echo"TIDAK LULUSS";
		}
		else if (($totalpeng << $datakkm[0]) and ($totalket << $datakkm[0]) and ($datadaftarhadir[5]<=3)
			and ($totalpeng1 << $datakkm[0]) and ($totalket1 << $datakkm[0]) and ($datadaftarhadir1[5]<=3))
		{
			$worksheet->setCellValue('G314','3');
			$worksheet->setCellValue('H314','( Tiga )');
			//echo"TIDAK LULUSS";
		}
		else if (($totalpeng << $datakkm[0]) and ($totalket << $datakkm[0]) and ($datadaftarhadir[5]>>3)
			and ($totalpeng1 << $datakkm[0]) and ($totalket1 << $datakkm[0]) and ($datadaftarhadir1[5]>>3))
		{
			$worksheet->setCellValue('G314','3');
			$worksheet->setCellValue('H314','( Tiga )');
			//echo"TIDAK LULUSS";
		}
		
		
		//Format Cell
		//$worksheet->getStyle('A1')->getFont()-> setName('Comic Sans MS');
		//worksheet->getStyle('A1')->getFont()-> setSize('14');
		
		// redirect output to browser
		header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="raport_kelas3_genap.xls"');
		header('Cache-Control: max-age=0');
		$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel); // 2007 untuk ex2007, 5 untuk versi excel seterusnya
		$objWriter->save('php://output');
	}
	

?>