<?php
echo"<p align='center'>";
	
	//ambil tahun ajaran, nama siswa, no absen, no induk, di kelas sekarang dari tabel data_siswa, dari DB kelas sekarang
	//pecah tahun ajaran dengan menggunakan substr, tambah tahun dari tiap hasil pecahan string dengan 1, kemudian gabungkan kembali
	//masukkan data siswa dalam setiap tabel yang ada di DB kelas yang baru
	
	$noabsen=$_GET['noabsen'];
	//$nabsen=$_GET['nabsen'];
	
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_6",$koneksi) or die(mysql_error());
	//$querys="SELECT * FROM data_gurukelas"; $hasils=mysql_query($querys) or die(mysql_error()); $datas=mysql_fetch_array ($hasils);
	$query="SELECT * FROM data_siswa WHERE no_absen='$noabsen'"; $hasil=mysql_query($query) or die(mysql_error()); $data=mysql_fetch_array ($hasil);
	
	$ta=$data[1];		//ambil tahun ajaran
	$ta1= substr ($ta,0,4); 
	$ta2= substr ($ta,5,4);
	$tahun1 = $ta1 + 1;
	$tahun2 = $ta2 + 1;
	$tahunajar = $tahun1."/".$tahun2;
	$nama=$data[3];
	$nipd=$data[2];
	$nabsen=$data[0];
	$tml=$data[4];
	$tl=$data[5];
	$jk=$data[6];
	$agama=$data[7];
	$pends=$data[8];
	$alamat=$data[9];
	$na=$data[10];
	$ni=$data[11];
	$pa=$data[12];
	$pi=$data[13];
	$jalan=$data[14];
	$kel=$data[15];
	$kec=$data[16];
	$kab=$data[17];
	$prov=$data[18];
	$nw=$data[19];
	$pw=$data[20];
	$aw=$data[21];
	
	
	
	$koneksi2=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_6",$koneksi2) or die(mysql_error());
	
	$queryup="INSERT INTO data_siswa VALUES ('$nabsen','$tahunajar','$nipd','$nama','$tml','$tl','$jk','$agama','$pends','$alamat',
			'$na','$ni','$pa','$pi','$jalan','$kel','$kec','$kab','$prov','$nw','$pw','$aw')";
	$hasilup=mysql_query($queryup) or die(mysql_error());
	
	$query1="INSERT INTO nilai_peng_agama_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query1) or die(mysql_error());
	$query1="INSERT INTO nilai_peng_agama_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query1) or die(mysql_error());
	$query2="INSERT INTO nilai_ket_agama_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query2) or die(mysql_error());
	$query2="INSERT INTO nilai_ket_agama_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query2) or die(mysql_error());
	$query3="INSERT INTO nilai_peng_bd_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query3) or die(mysql_error());
	$query3="INSERT INTO nilai_peng_bd_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query3) or die(mysql_error());
	$query4="INSERT INTO nilai_ket_bd_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query4) or die(mysql_error());
	$query4="INSERT INTO nilai_ket_bd_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query4) or die(mysql_error());
	$query5="INSERT INTO nilai_peng_bi_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query5) or die(mysql_error());
	$query5="INSERT INTO nilai_peng_bi_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query5) or die(mysql_error());
	$query6="INSERT INTO nilai_ket_bi_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query6) or die(mysql_error());
	$query6="INSERT INTO nilai_ket_bi_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query6) or die(mysql_error());
	
	$query9="INSERT INTO nilai_peng_mtk_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query9) or die(mysql_error());
	$query9="INSERT INTO nilai_peng_mtk_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query9) or die(mysql_error());
	$query10="INSERT INTO nilai_ket_mtk_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query10) or die(mysql_error());
	$query10="INSERT INTO nilai_ket_mtk_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query10) or die(mysql_error());
	$query11="INSERT INTO nilai_peng_pjok_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query11) or die(mysql_error());
	$query11="INSERT INTO nilai_peng_pjok_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query11) or die(mysql_error());
	$query12="INSERT INTO nilai_ket_pjok_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query12) or die(mysql_error());
	$query12="INSERT INTO nilai_ket_pjok_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query12) or die(mysql_error());
	$query13="INSERT INTO nilai_peng_pkn_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query13) or die(mysql_error());
	$query13="INSERT INTO nilai_peng_pkn_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query13) or die(mysql_error());
	$query14="INSERT INTO nilai_ket_pkn_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query14) or die(mysql_error());
	$query14="INSERT INTO nilai_ket_pkn_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query14) or die(mysql_error());
	$query15="INSERT INTO nilai_peng_sbp_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query15) or die(mysql_error());
	$query15="INSERT INTO nilai_peng_sbp_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query15) or die(mysql_error());
	$query16="INSERT INTO nilai_ket_sbp_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query16) or die(mysql_error());
	$query16="INSERT INTO nilai_ket_sbp_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query16) or die(mysql_error());
	
	$query17="INSERT INTO nilai_sosial_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query17) or die(mysql_error());
	$query17="INSERT INTO nilai_sosial_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query17) or die(mysql_error());
	$query18="INSERT INTO nilai_spiritual_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query18) or die(mysql_error());
	$query18="INSERT INTO nilai_spiritual_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query18) or die(mysql_error());
	
	$query19="INSERT INTO daftar_hadir (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query19) or die(mysql_error());
	$query19="INSERT INTO data_kesehatan (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query19) or die(mysql_error());
	$query19="INSERT INTO ekskul_dan_saran (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query19) or die(mysql_error());

	include"atas.php";
	//include"rekapnilai.php";
	echo"Siswa dengan Nomor Induk $nipd telah naik kelas";
	include"bawah.php";
	mysql_close($koneksi);
	mysql_close($koneksi2);
	
?>