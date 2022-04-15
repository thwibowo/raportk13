<?php
echo"<p align='center'>";
	//include("tombol.htm");
	$nipd=$_GET['nipd'];
	
	
	//buka koneksi ke system mysql
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	
	//buka database
	mysql_select_db("raportk13_6",$koneksi) or die(mysql_error());
	
	//susun query
	$query="DELETE FROM data_siswa WHERE no_induk='$nipd'";
	
	//eksekusi query
	$hasil = mysql_query($query) or die(mysql_error());
	
	
	/*
	$query1="DELETE FROM nilai_peng_agama WHERE no_absen = '$nabsen' "; mysql_query($query1) or die(mysql_error());
	$query2="DELETE FROM nilai_ket_agama WHERE no_absen = '$nabsen' "; mysql_query($query2) or die(mysql_error());
	$query3="DELETE FROM nilai_peng_bd WHERE no_absen = '$nabsen' "; mysql_query($query3) or die(mysql_error());
	$query4="DELETE FROM nilai_ket_bd WHERE no_absen = '$nabsen' "; mysql_query($query4) or die(mysql_error());
	$query5="DELETE FROM nilai_peng_bi WHERE no_absen = '$nabsen' "; mysql_query($query5) or die(mysql_error());
	$query6="DELETE FROM nilai_ket_bi WHERE no_absen = '$nabsen' "; mysql_query($query6) or die(mysql_error());
	$query7="DELETE FROM nilai_peng_bing WHERE no_absen = '$nabsen' "; mysql_query($query7) or die(mysql_error());
	$query8="DELETE FROM nilai_ket_bing WHERE no_absen = '$nabsen' "; mysql_query($query8) or die(mysql_error());
	$query9="DELETE FROM nilai_peng_mtk WHERE no_absen = '$nabsen' "; mysql_query($query9) or die(mysql_error());
	$query10="DELETE FROM nilai_ket_mtk WHERE no_absen = '$nabsen' "; mysql_query($query10) or die(mysql_error());
	$query11="DELETE FROM nilai_peng_pjok WHERE no_absen = '$nabsen' "; mysql_query($query11) or die(mysql_error());
	$query12="DELETE FROM nilai_ket_pjok WHERE no_absen = '$nabsen' "; mysql_query($query12) or die(mysql_error());
	$query13="DELETE FROM nilai_peng_pkn WHERE no_absen = '$nabsen' "; mysql_query($query13) or die(mysql_error());
	$query14="DELETE FROM nilai_ket_pkn WHERE no_absen = '$nabsen' "; mysql_query($query14) or die(mysql_error());
	$query15="DELETE FROM nilai_peng_sbp WHERE no_absen = '$nabsen' "; mysql_query($query15) or die(mysql_error());
	$query16="DELETE FROM nilai_ket_sbp WHERE no_absen = '$nabsen' "; mysql_query($query16) or die(mysql_error());*/
	
	//$query = "DELETE FROM data_siswa WHERE no_induk = '$nipd[$i]' "; mysql_query($query) or die(mysql_error());
	$query1="DELETE FROM nilai_peng_agama_ganjil WHERE no_induk = '$nipd' "; mysql_query($query1) or die(mysql_error());
	$query2="DELETE FROM nilai_peng_agama_genap WHERE no_induk = '$nipd' "; mysql_query($query2) or die(mysql_error());
	$query3="DELETE FROM nilai_ket_agama_ganjil WHERE no_induk = '$nipd' "; mysql_query($query3) or die(mysql_error());
	$query4="DELETE FROM nilai_ket_agama_genap WHERE no_induk = '$nipd' "; mysql_query($query4) or die(mysql_error());
	$query5="DELETE FROM nilai_peng_bd_ganjil WHERE no_induk = '$nipd' "; mysql_query($query5) or die(mysql_error());
	  $query6="DELETE FROM nilai_peng_bd_genap WHERE no_induk = '$nipd' "; mysql_query($query6) or die(mysql_error());
	  $query7="DELETE FROM nilai_ket_bd_ganjil WHERE no_induk = '$nipd' "; mysql_query($query7) or die(mysql_error());
	  $query8="DELETE FROM nilai_ket_bd_genap WHERE no_induk = '$nipd' "; mysql_query($query8) or die(mysql_error());
	  $query9="DELETE FROM nilai_peng_bi_ganjil WHERE no_induk = '$nipd' "; mysql_query($query9) or die(mysql_error());
	  $query10="DELETE FROM nilai_peng_bi_genap WHERE no_induk = '$nipd' "; mysql_query($query10) or die(mysql_error());
	  $query11="DELETE FROM nilai_ket_bi_ganjil WHERE no_induk = '$nipd' "; mysql_query($query11) or die(mysql_error());
	  $query12="DELETE FROM nilai_ket_bi_genap WHERE no_induk = '$nipd' "; mysql_query($query12) or die(mysql_error());
	  $query17="DELETE FROM nilai_peng_mtk_ganjil WHERE no_induk = '$nipd' "; mysql_query($query17) or die(mysql_error());
	  $query18="DELETE FROM nilai_peng_mtk_genap WHERE no_induk = '$nipd' "; mysql_query($query18) or die(mysql_error());
	  $query19="DELETE FROM nilai_ket_mtk_ganjil WHERE no_induk = '$nipd' "; mysql_query($query19) or die(mysql_error());
	  $query20="DELETE FROM nilai_ket_mtk_genap WHERE no_induk = '$nipd' "; mysql_query($query20) or die(mysql_error());
	  $query21="DELETE FROM nilai_peng_pjok_ganjil WHERE no_induk = '$nipd' "; mysql_query($query21) or die(mysql_error());
	  $query22="DELETE FROM nilai_peng_pjok_genap WHERE no_induk = '$nipd' "; mysql_query($query22) or die(mysql_error());
	  $query23="DELETE FROM nilai_ket_pjok_ganjil WHERE no_induk = '$nipd' "; mysql_query($query23) or die(mysql_error());
	  $query24="DELETE FROM nilai_ket_pjok_genap WHERE no_induk = '$nipd' "; mysql_query($query24) or die(mysql_error());
	  $query25="DELETE FROM nilai_peng_pkn_ganjil WHERE no_induk = '$nipd' "; mysql_query($query25) or die(mysql_error());
	  $query26="DELETE FROM nilai_peng_pkn_genap WHERE no_induk = '$nipd' "; mysql_query($query26) or die(mysql_error());
	  $query27="DELETE FROM nilai_ket_pkn_ganjil WHERE no_induk = '$nipd' "; mysql_query($query27) or die(mysql_error());
	  $query28="DELETE FROM nilai_ket_pkn_genap WHERE no_induk = '$nipd' "; mysql_query($query28) or die(mysql_error());
	  $query29="DELETE FROM nilai_peng_sbp_ganjil WHERE no_induk = '$nipd' "; mysql_query($query29) or die(mysql_error());
	  $query30="DELETE FROM nilai_peng_sbp_genap WHERE no_induk = '$nipd' "; mysql_query($query30) or die(mysql_error());
	  $query31="DELETE FROM nilai_ket_sbp_ganjil WHERE no_induk = '$nipd' "; mysql_query($query31) or die(mysql_error());
	  $query32="DELETE FROM nilai_ket_sbp_genap WHERE no_induk = '$nipd' "; mysql_query($query32) or die(mysql_error());
	  $query33="DELETE FROM nilai_spiritual_ganjil WHERE no_induk = '$nipd' "; mysql_query($query33) or die(mysql_error());
	  $query34="DELETE FROM nilai_spiritual_genap WHERE no_induk = '$nipd' "; mysql_query($query34) or die(mysql_error());
	  $query35="DELETE FROM nilai_sosial_ganjil WHERE no_induk = '$nipd' "; mysql_query($query35) or die(mysql_error());
	  $query36="DELETE FROM nilai_sosial_genap WHERE no_induk = '$nipd' "; mysql_query($query36) or die(mysql_error());
	  $query37="DELETE FROM data_kesehatan WHERE no_induk = '$nipd' "; mysql_query($query37) or die(mysql_error());
	  $query38="DELETE FROM ekskul_dan_saran WHERE no_induk = '$nipd' "; mysql_query($query38) or die(mysql_error());
	  $query39="DELETE FROM daftar_hadir WHERE no_induk = '$nipd' "; mysql_query($query39) or die(mysql_error());
	  $query40="DELETE FROM prestasi_siswa WHERE no_induk = '$nipd' "; mysql_query($query40) or die(mysql_error());
	
	echo"<html lang='en'>
	<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Aplikasi K13 SDN Blimbing 2</title>
    <link href='/RAPORTK13/vendor/bootstrap/css/bootstrap.min.css' rel='stylesheet'>
    <link href='/RAPORTK13/vendor/metisMenu/metisMenu.min.css' rel='stylesheet'>
    <link href='/RAPORTK13/dist/css/sb-admin-2.css' rel='stylesheet'>
    <link href='/RAPORTK13/vendor/morrisjs/morris.css' rel='stylesheet'>
    <link href='/RAPORTK13/vendor/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
</head>
<body>
    <div id='wrapper'>
        <nav class='navbar navbar-default navbar-static-top' role='navigation' style='margin-bottom: 0'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand'>Aplikasi Raport K13 Kelas 1 SDN Blimbing 2 Malang</a>
            </div>
            <ul class='nav navbar-top-links navbar-right'>
                <li class='dropdown'>
                    <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
                        <i class='fa fa-power-off fa-fw'></i> <i class='fa fa-caret-down'></i>
                    </a>
                    <ul class='dropdown-menu dropdown-user'>
                        <li><a href='profilpembuat.html'><i class='fa fa-user fa-fw'></i> Profil Pembuat Aplikasi</a>
                        </li>
                        <li><a href='tentangaplikasi.html'><i class='fa fa-gear fa-fw'></i> Tentang Aplikasi</a>
                        </li>
                        <li class='divider'></li>
                        <li><a href='/RAPORTK13/depan.html'><i class='fa fa-sign-out fa-fw'></i> Keluar</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class='navbar-default sidebar' role='navigation'>
                <div class='sidebar-nav navbar-collapse'>
                    <ul class='nav' id='side-menu'>
                        
                        <li>
                            <a href='datagurusekolah.php'><i class='fa fa-home fa-fw'></i>Data Sekolah &amp Guru Kelas</a>
                        </li>
						<li>
                            <a href='#'><i class='fa fa-book fa-fw'></i> Biodata Siswa<span class='fa arrow'></span></a>
                            <ul class='nav nav-second-level'>
                                <li>
                                    <a href='biodatasiswa.php'>Input Biodata Siswa</a>
                                </li>
								<li>
                                    <a href='tampilbiosiswa.php'>Lihat Biodata Siswa</a>
                                </li> 
                            </ul>
                        </li>
                        <li>
                            <a href='#'><i class='fa fa-edit fa-fw'></i> Penilaian<span class='fa arrow'></span></a>
							<ul class='nav nav-second-level'>
                                <li>
                                    <a href='isinilaispiritual.php'>Aspek Spiritual (KI 1)</a>
                                </li>
								<li>
                                    <a href='isinilaisosial.php'>Aspek Sosial (KI 2)</a>
                                </li> 
								<li>
                                    <a href=''>Aspek Pengetahuan (KI 3)<span class='fa arrow'></span></a>
									<ul class='nav nav-third-level'>
                                        <li>
                                            <a href='isinilaipengpkn.php'>PKN</a>
                                        </li>
                                        <li>
                                            <a href='isinilaipengbi.php'>Bahasa Indonesia</a>
                                        </li>
                                        <li>
                                            <a href='isinilaipengmtk.php'>Matematika</a>
                                        </li>
                                        <li>
                                            <a href='isinilaipengsbp.php'>SBDP</a>
                                        </li>
										<li>
                                            <a href='isinilaipengpjok.php'>PJOK</a>
                                        </li>
                                        <li>
                                            <a href='isinilaipengagama.php'>Agama</a>
                                        </li>
                                        <li>
                                            <a href='isinilaipengbd.php'>Bahasa Jawa</a>
                                        </li>
                                    </ul>
                                </li>
								<li>
                                    <a href='panels-wells.html'>Aspek Keterampilan (KI 4)<span class='fa arrow'></span></a>
									<ul class='nav nav-third-level'>
                                        <li>
                                            <a href='isinilaiketpkn.php'>PKN</a>
                                        </li>
                                        <li>
                                            <a href='isinilaiketbi.php'>Bahasa Indonesia</a>
                                        </li>
                                        <li>
                                            <a href='isinilaiketmtk.php'>Matematika</a>
                                        </li>
                                        <li>
                                            <a href='isinilaiketsbp.php'>SBDP</a>
                                        </li>
										<li>
                                            <a href='isinilaiketpjok.php'>PJOK</a>
                                        </li>
                                        <li>
                                            <a href='isinilaiketagama.php'>Agama</a>
                                        </li>
                                        <li>
                                            <a href='isinilaiketbd.php'>Bahasa Jawa</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
						<li>
                            <a href='#'><i class='fa fa-edit fa-fw'></i> Catatan &amp Ekskul<span class='fa arrow'></span></a>
							<ul class='nav nav-second-level'>
                                <li>
                                    <a href='catatanfisik.php'>Catatan Fisik</a>
                                </li>
								<li>
                                    <a href='daftarhadir.php'>Daftar Hadir</a>
                                </li>
								<li>
                                    <a href='ekskulsaran.php'>Ekskul &amp Saran</a>
                                </li> 
								<li>
                                    <a href='prestasi.php'>Prestasi</a>
                                </li>
							</ul>
						</li>
						<li>
                            <a href='rekapnilai.php'><i class='fa fa-bar-chart-o fa-fw'></i> Rekap Nilai &amp Cetak Raport</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
		    <div id='page-wrapper'>
            <div class='row'>
                <div class='col-lg-12'>
                    <h3 class='page-header'><p align='center'>Biodata Siswa</p></h3>
                </div> 
            </div>
			<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
						 <div class='panel-heading'>
						 </div>
						 <div class='panel-body'>";			//heading panel ke-1
	
	//other proccess
	echo "Biodata siswa dengan no. induk $nipd telah sukses dihapus </br>";
	
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
echo"</p>";
?>