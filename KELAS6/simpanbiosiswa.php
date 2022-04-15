<?php
echo"<p align='center'";
	//include("tombol.htm"); echo"<br>";
	include"atas.php";			//heading panel ke-1
	$nipd=$_GET['nipd'];
	$nama=$_GET['nama'];
	$tml=$_GET['tml'];
	$tgl=$_GET['tgl'];
	$bln=$_GET['bln'];
	$thn=$_GET['thn'];
	$jk=$_GET['jk'];
	$tl=$thn."-".$bln."-".$tgl;
	$agama=$_GET['agama'];
	$pends=$_GET['pends'];
	$alamat=$_GET['alamat'];
	$na=$_GET['na'];
	$ni=$_GET['ni'];
	$pa=$_GET['pa'];
	$pi=$_GET['pi'];
	$jalan=$_GET['jalan'];
	$kel=$_GET['kel'];
	$kec=$_GET['kec'];
	$kab=$_GET['kab'];
	$prov=$_GET['prov'];
	$nw=$_GET['nw'];
	$pw=$_GET['pw'];
	$aw=$_GET['aw'];
	$nabsen=$_GET['nabsen'];
	$tahunajar=$_GET['tahunajar'];
	//echo"$tl";
	//buka koneksi ke system mysql
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	
	//buka database
	mysql_select_db("raportk13_6",$koneksi) or die(mysql_error());
	
	//susun query
	$query="INSERT INTO data_siswa VALUES ('$nabsen','$tahunajar','$nipd','$nama','$tml','$tl','$jk','$agama','$pends','$alamat','$na','$ni','$pa','$pi','$jalan','$kel','$kec','$kab','$prov','$nw','$pw','$aw')";
	//eksekusi query
	mysql_query($query) or die(mysql_error());
	//$query1="SELECT * FROM data_gurukelas"; $hasil1=mysql_query($query1) or die(mysql_error()); $data1=mysql_fetch_array($hasil1);
	
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
	/*$query23="INSERT INTO nilai_ket_ipa_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query23) or die(mysql_error());
	$query23="INSERT INTO nilai_ket_ipa_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query23) or die(mysql_error());
	$query24="INSERT INTO nilai_ket_ips_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query24) or die(mysql_error());
	$query24="INSERT INTO nilai_ket_ips_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query24) or die(mysql_error());*/
	
	$query17="INSERT INTO nilai_sosial_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query17) or die(mysql_error());
	$query18="INSERT INTO nilai_sosial_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query18) or die(mysql_error());
	$query17="INSERT INTO nilai_spiritual_ganjil (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query17) or die(mysql_error());
	$query18="INSERT INTO nilai_spiritual_genap (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query18) or die(mysql_error());
	
	$query19="INSERT INTO daftar_hadir (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query19) or die(mysql_error());
	$query20="INSERT INTO data_kesehatan (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query20) or die(mysql_error());
	
	$query22="INSERT INTO ekskul_dan_saran (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query22) or die(mysql_error());
	$query23="INSERT INTO prestasi_siswa (no_absen, nama_siswa, tahun_ajaran, no_induk) VALUES ('$nabsen','$nama','$tahunajar','$nipd')"; mysql_query($query23) or die(mysql_error());

	
	//other proccess
	
	echo"<h1 align='center'>Data siswa telah disimpan!!! </h1><br>";
	include"bawah.php";
	
	//tutup koneksi
	mysql_close($koneksi);
echo"</p>";
?>

