<?php

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
                        <li><a href='tentangaplikasi.html'><i class='fa fa-gear fa-fw'></i>Petunjuk Penggunaan Aplikasi</a>
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
                            <a href='datagurusekolah.php'><i class='fa fa-home fa-fw'></i> Data Sekolah &amp Guru Kelas</a>
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
										<li>
                                            <a href='isinilaipengipa.php'>IPA</a>
                                        </li>
                                        <li>
                                            <a href='isinilaipengips.php'>IPS</a>
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
                                        </li><li>
                                            <a href='isinilaiketipa.php'>IPA</a>
                                        </li>
                                        <li>
                                            <a href='isinilaiketips.php'>IPS</a>
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
                    <h3 class='page-header'><p align='center'></p></h3>
                </div> 
            </div>
			<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
						 <div class='panel-heading'>
						 </div>
						 <div class='panel-body'>";			//heading panel ke-1

?>