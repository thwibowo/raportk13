<?php
echo"<p align='center'>";
	//buka koneksi ke system mysql
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	//buka database
	mysql_select_db("raportk13_1",$koneksi) or die(mysql_error());

if(!isset($_GET['simpan']))
{	
	$query="SELECT * FROM data_gurukelas";
	$hasil=mysql_query($query) or die(mysql_error());
	$data=mysql_fetch_array ($hasil);
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
                        <li><a href='tentangaplikasi.html'><i class='fa fa-gear fa-fw'></i> Petunjuk Penggunaan Aplikasi</a>
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
                    <h3 class='page-header'><p align='center'>Data Sekolah & Guru Kelas</p></h3>
                </div> 
            </div>
			<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
						 <div class='panel-heading'>
						 </div>
						 <div class='panel-body'>";			//heading panel ke-1
	echo"<form method='GET' action='datagurusekolah.php'>";
	
	$query4="SELECT*FROM data_sekolah"; $hasil4=mysql_query($query4) or die(mysql_error()); $data4=mysql_fetch_array($hasil4);
	$thntulis = substr ($data[6],0,4);
	$blntulis = substr ($data[6],5,2);
	$tgltulis = substr ($data[6],8,2);
	
	
	//echo"<h1><p align='center'>DAFTAR NILAI & RAPORT KURIKULUM 2013<br>'$data4[1] $data4[8]'</p></h1>";
	//echo"<h3><p align='center'><u>Form Biodata Guru Kelas</u></p></h3>";
	echo"<h3><p align='center'><u>Data Guru Kelas</u></p></h3>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Nama</b></td>"; echo"<td>:</td>";
	echo"<td colspan='3'><input class='form-control' type='text' name='nama' size='40' value='$data[2]' autofocus required></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>NIP</b></td>"; echo"<td>:</td>";
	echo"<td colspan='3'><input class='form-control' type='text' name='nip' size='40' value='$data[1]' autofocus required></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kelas</b></td>"; echo"<td>:</td>";
	echo"<td colspan='3'><input class='form-control' type='text' name='kelas' size='40' readonly value='$data[3]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Semester</b></td>"; echo"<td>:</td>";
	echo"<td><select class='form-control' name='semester' size='1' autofocus required>
		<option value='$data[4]'>$data[4]</option><option value='1'>1 (Satu)</option><option value='2'>2 (Dua)</option></select></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Tahun Ajaran</b></td>"; echo"<td>:</td>";
	echo"<td width='100'><input type='text' class='form-control' name='tahunajar' size='20' value='$data[5]' autofocus required></td>";
	echo"<td colspan='2'><b>*)Contoh: 2013/2014</b></td><td width='100'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Tanggal Penulisan Raport</b></td><td>:</td>";
	echo"<td width='100'><input type='text' class='form-control' size='3' name='tgltulis' value='$tgltulis' placeholder='tanggal' autofocus required></td>
					<td><select class='form-control' name='blntulis' value='$blntulis' autofocus required>
							<option value='1' ". ($blntulis == '1'?'selected':'') ."> Januari</option>
							<option value='2' ".($blntulis == '2'?'selected':'') ."> Februari</option>
							<option value='3' ".($blntulis == '3'?'selected':'')."> April</option>
							<option value='4' ".($blntulis == '4'?'selected':'') ."> Maret</option>
							<option value='5' ".($blntulis == '5'?'selected':'') ."> Mei</option>
							<option value='6' ".($blntulis == '6'?'selected':'') ."> Juni</option>
							<option value='7' ".($blntulis == '7'?'selected':'') ."> Juli</option>
							<option value='8' ".($blntulis == '8'?'selected':'')."> Agustus</option>
							<option value='9' ".($blntulis == '9'?'selected':'') ."> September</option>
							<option value='10' ".($blntulis == '10'?'selected':'') ."> Oktober</option>
							<option value='11' ".($blntulis == '11'?'selected':'') ."> November</option>
							<option value='12' ".($blntulis == '12'?'selected':'') ."> Desember</option></select></td>
			<td width='100'><input type='text' class='form-control' size='5' name='thntulis' value='$thntulis' placeholder='tahun' autofocus required><br></td>";
	echo"</tr>";
	echo"</table>"; 
	echo"</p>";

	$query2="SELECT*FROM kkm";
	//eksekusi query
	$hasil2=mysql_query($query2) or die(mysql_error());
	$data2=mysql_fetch_array ($hasil2);
	$kkm = number_format($data2[0],2,",","."); // mengganti karakter koma dengan titik dalam suatu string
	
	$query3="SELECT*FROM data_sekolah"; $hasil3=mysql_query($query3) or die(mysql_error()); $data3=mysql_fetch_array($hasil3); 
	echo"<h3><p align='center'><u>Data Sekolah</u></p></h3>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Nama Sekolah</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='namasekolah' size='40' value='$data3[1]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Nama Kepala Sekolah</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='namakepsek' size='40' value='$data3[12]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>NIP Kepala Sekolah</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='nipkepsek' size='20' value='$data3[13]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>NSS</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='nss' size='20' value='$data3[2]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Alamat<b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='alamat' size='40' value='$data3[3]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kode Pos</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='kodepos' size='20' value='$data3[4]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Telp.</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='telp' size='30' value='$data3[5]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kelurahan</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='kel' size='30' value='$data3[6]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kecamatan</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='kec' size='30' value='$data3[7]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kabupaten/Kota</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='kab' size='30' value='$data3[8]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Provinsi</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='prov' size='30' value='$data3[9]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Website</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='web' size='40' value='$data3[10]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>E-mail</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='email' size='40' value='$data3[11]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>KKM</b></td><td>:</td>";
	echo"<td><input type='text' class='form-control' name='kkm' text-align='center' value='$kkm'></td>"; //KKM dipindah di sini!!!!!!
	echo"</tr>";
	echo"</table></br>"; 
	echo"<button type='submit' name='simpan' class='btn btn-primary'>Simpan Data</button>"; echo"</p>";
	echo"</form>";
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
}
else if (isset($_GET['simpan']))
{	$kepsek = $_GET['namakepsek'];$nipkepsek = $_GET['nipkepsek'];
	$kelas=$_GET['kelas']; $nip=$_GET['nip']; $nama=$_GET['nama'];  
	$kkm=$_GET['kkm']; //echo $kkm;
	$tgltulis = $_GET['tgltulis']; $blntulis = $_GET['blntulis']; $thntulis = $_GET['thntulis'];
	$tulis=$thntulis."-".$blntulis."-".$tgltulis;
	$semester=$_GET['semester']; $tahunajar=$_GET['tahunajar'];
	$namasekolah=$_GET['namasekolah']; $nss=$_GET['nss']; $alamat=$_GET['alamat']; $kodepos=$_GET['kodepos']; $telp=$_GET['telp']; $kel=$_GET['kel'];
	$kec=$_GET['kec']; $kab=$_GET['kab']; $prov=$_GET['prov']; $web=$_GET['web']; $email=$_GET['email'];
	//buka koneksi ke system mysql
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	
	//buka database
	mysql_select_db("raportk13_1",$koneksi) or die(mysql_error());
	$query="UPDATE data_gurukelas SET nip='$nip', nama_walikelas='$nama', kelas='$kelas', semester='$semester', tahun_ajaran='$tahunajar', tanggal_tulis='$tulis' WHERE no='1'";
	mysql_query($query) or die(mysql_error());
	
	//isi rekap data guru
	$querycari = "SELECT * FROM rekap_data_guru WHERE tahun_ajaran='$tahunajar'"; 
	$hasilcari=mysql_query($querycari) or die(mysql_error());$datacari=mysql_num_rows($hasilcari); echo $datacari; 
	if ($datacari==0)
	{
		$queryrekap="INSERT INTO rekap_data_guru (tahun_ajaran, nama) VALUES ('$tahunajar','$nama')"; mysql_query($queryrekap) or die(mysql_error());
	}
	
	$query5="UPDATE data_sekolah SET nama_sekolah='$namasekolah', nss='$nss', alamat='$alamat', kode_pos='$kodepos', telepon='$telp', kelurahan='$kel', 
			kecamatan='$kec', kabupaten='$kab', provinsi='$prov', website='$web', email='$email', kepala_sekolah='$kepsek', nip_kepsek='$nipkepsek' WHERE no='1' ";
	$hasil5=mysql_query($query5) or die(mysql_error());	
	$query1 = "SELECT * FROM data_gurukelas";
	$hasil1 = mysql_query($query1) or die(mysql_error());
	$data=mysql_fetch_array ($hasil1);
	
	$pos=strpos($kkm,".");
	if ($pos = -1)
	{
		$kkm = str_replace(",",".",$kkm);
	} 
	  
	$query2 = "UPDATE kkm SET skor_kkm='$kkm' WHERE nomor='1'";
	//eksekusi query
	$hasil2 = mysql_query($query2) or die(mysql_error());
	
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
                        <li><a href='tentangaplikasi.html'><i class='fa fa-gear fa-fw'></i> Petunjuk Penggunaan Aplikasi</a>
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
                    <h3 class='page-header'><p align='center'>Data Sekolah & Guru Kelas</p></h3>
                </div> 
            </div>
			<div class='row'>
                <div class='col-lg-12'>
                    <div class='panel panel-default'>
						 <div class='panel-heading'>
						 </div>
						 <div class='panel-body'>";			//heading panel ke-1
	echo"<form method='GET' action='datagurusekolah.php'>";
	
	$query4="SELECT*FROM data_sekolah"; $hasil4=mysql_query($query4) or die(mysql_error()); $data4=mysql_fetch_array($hasil4);
	$thntulis = substr ($data[6],0,4);
	$blntulis = substr ($data[6],5,2);
	$tgltulis = substr ($data[6],8,2);
	
	//echo"<h1><p align='center'>DAFTAR NILAI & RAPORT KURIKULUM 2013<br>'$data4[1] $data4[8]'</p></h1>";
	//echo"<h3><p align='center'><u>Form Biodata Guru Kelas</u></p></h3>";
	echo"<h3><p align='center'><u>Data Guru Kelas</u></p></h3>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Nama</b></td>"; echo"<td>:</td>";
	echo"<td colspan='3'><input class='form-control' type='text' name='nama' size='40' value='$data[2]' autofocus required></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>NIP</b></td>"; echo"<td>:</td>";
	echo"<td colspan='3'><input class='form-control' type='text' name='nip' size='40' value='$data[1]' autofocus required></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kelas</b></td>"; echo"<td>:</td>";
	echo"<td colspan='3'><input class='form-control' type='text' name='kelas' size='40' readonly value='$data[3]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Semester</b></td>"; echo"<td>:</td>";
	echo"<td><select class='form-control' name='semester' size='1' autofocus required>
		<option value='$data[4]'>$data[4]</option><option value='1'>1 (Satu)</option><option value='2'>2 (Dua)</option></select></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Tahun Ajaran</b></td>"; echo"<td>:</td>";
	echo"<td width='100'><input type='text' class='form-control' name='tahunajar' size='20' value='$data[5]' autofocus required></td>";
	echo"<td colspan='2'><b>*)Contoh: 2013/2014</b></td><td width='100'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Tanggal Penulisan Raport</b></td><td>:</td>";
	echo"<td width='100'><input type='text' class='form-control' size='3' name='tgltulis' value='$tgltulis' placeholder='tanggal' autofocus required></td>
					<td><select class='form-control' name='blntulis' value='$blntulis' autofocus required>
							<option value='1' ". ($blntulis == '1'?'selected':'') ."> Januari</option>
							<option value='2' ".($blntulis == '2'?'selected':'') ."> Februari</option>
							<option value='3' ".($blntulis == '3'?'selected':'')."> April</option>
							<option value='4' ".($blntulis == '4'?'selected':'') ."> Maret</option>
							<option value='5' ".($blntulis == '5'?'selected':'') ."> Mei</option>
							<option value='6' ".($blntulis == '6'?'selected':'') ."> Juni</option>
							<option value='7' ".($blntulis == '7'?'selected':'') ."> Juli</option>
							<option value='8' ".($blntulis == '8'?'selected':'')."> Agustus</option>
							<option value='9' ".($blntulis == '9'?'selected':'') ."> September</option>
							<option value='10' ".($blntulis == '10'?'selected':'') ."> Oktober</option>
							<option value='11' ".($blntulis == '11'?'selected':'') ."> November</option>
							<option value='12' ".($blntulis == '12'?'selected':'') ."> Desember</option></select></td>
			<td width='100'><input type='text' class='form-control' size='5' name='thntulis' value='$thntulis' placeholder='tahun' autofocus required><br></td>";
	echo"</tr>";
	echo"</table>";echo"</p>";  
		
	$query4="SELECT*FROM kkm";
	$hasil4=mysql_query($query4) or die(mysql_error());
	
	$data4=mysql_fetch_array ($hasil4);
	$kkm = number_format($data4[0],2,",","."); // mengganti karakter koma dengan titik dalam suatu string
	
	$query3="SELECT*FROM data_sekolah"; $hasil3=mysql_query($query3) or die(mysql_error()); $data3=mysql_fetch_array($hasil3); 
	echo"<h3><p align='center'><u>Data Sekolah</u></p></h3>";
	echo"<p align='center'>";
	echo"<table border=0>";
	echo"<tr>";
	echo"<td><b>Nama Sekolah</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='namasekolah' size='40' value='$data3[1]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Nama Kepala Sekolah</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='namakepsek' size='40' value='$data3[12]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>NIP Kepala Sekolah</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='nipkepsek' size='20' value='$data3[13]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>NSS</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='nss' size='20' value='$data3[2]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Alamat<b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='alamat' size='40' value='$data3[3]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kode Pos</b></td>"; echo"<td>:</td>";
	echo"<td colspan='2'><input type='text' class='form-control' name='kodepos' size='20' value='$data3[4]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Telp.</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='telp' size='30' value='$data3[5]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kelurahan</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='kel' size='30' value='$data3[6]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kecamatan</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='kec' size='30' value='$data3[7]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Kabupaten/Kota</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='kab' size='30' value='$data3[8]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Provinsi</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='prov' size='30' value='$data3[9]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>Website</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='web' size='40' value='$data3[10]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>E-mail</b></td>"; echo"<td>:</td>";
	echo"<td><input type='text' class='form-control' name='email' size='40' value='$data3[11]'></td>";
	echo"</tr>";
	echo"<tr>";
	echo"<td><b>KKM</b></td><td>:</td>";
	echo"<td><input type='text' class='form-control' name='kkm' text-align='center' value='$kkm'></td>"; //KKM dipindah di sini!!!!!!
	echo"</tr>";
	echo"</table></br>"; 
	echo"<button type='submit' name='simpan' class='btn btn-primary'>Simpan Data</button>"; echo"</p>";
	echo"</form>";
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
	////////1
	$koneksi2=mysql_connect("localhost","root","") or die(mysql_error()); mysql_select_db("raportk13_2",$koneksi2) or die(mysql_error());
	$query5="UPDATE data_sekolah SET nama_sekolah='$namasekolah', nss='$nss', alamat='$alamat', kode_pos='$kodepos', telepon='$telp', kelurahan='$kel', 
			kecamatan='$kec', kabupaten='$kab', provinsi='$prov', website='$web', email='$email', kepala_sekolah='$kepsek', nip_kepsek='$nipkepsek' WHERE no='1' ";
	$hasil5=mysql_query($query5) or die(mysql_error());	
	$query2 = "UPDATE kkm SET skor_kkm='$kkm' WHERE nomor='1'";$hasil2 = mysql_query($query2) or die(mysql_error());
	mysql_close($koneksi2);
	/////////
	$koneksi3=mysql_connect("localhost","root","") or die(mysql_error()); mysql_select_db("raportk13_3",$koneksi3) or die(mysql_error());
	$query5="UPDATE data_sekolah SET nama_sekolah='$namasekolah', nss='$nss', alamat='$alamat', kode_pos='$kodepos', telepon='$telp', kelurahan='$kel', 
			kecamatan='$kec', kabupaten='$kab', provinsi='$prov', website='$web', email='$email', kepala_sekolah='$kepsek', nip_kepsek='$nipkepsek' WHERE no='1' ";
	$hasil5=mysql_query($query5) or die(mysql_error());	
	$query2 = "UPDATE kkm SET skor_kkm='$kkm' WHERE nomor='1'";$hasil2 = mysql_query($query2) or die(mysql_error());
	mysql_close($koneksi3);
	///////
	$koneksi4=mysql_connect("localhost","root","") or die(mysql_error()); mysql_select_db("raportk13_4",$koneksi4) or die(mysql_error());
	$query5="UPDATE data_sekolah SET nama_sekolah='$namasekolah', nss='$nss', alamat='$alamat', kode_pos='$kodepos', telepon='$telp', kelurahan='$kel', 
			kecamatan='$kec', kabupaten='$kab', provinsi='$prov', website='$web', email='$email', kepala_sekolah='$kepsek', nip_kepsek='$nipkepsek' WHERE no='1' ";
	$hasil5=mysql_query($query5) or die(mysql_error());	
	$query2 = "UPDATE kkm SET skor_kkm='$kkm' WHERE nomor='1'";$hasil2 = mysql_query($query2) or die(mysql_error());
	mysql_close($koneksi4);
	//////////
	$koneksi5=mysql_connect("localhost","root","") or die(mysql_error()); mysql_select_db("raportk13_5",$koneksi5) or die(mysql_error());
	$query5="UPDATE data_sekolah SET nama_sekolah='$namasekolah', nss='$nss', alamat='$alamat', kode_pos='$kodepos', telepon='$telp', kelurahan='$kel', 
			kecamatan='$kec', kabupaten='$kab', provinsi='$prov', website='$web', email='$email', kepala_sekolah='$kepsek', nip_kepsek='$nipkepsek' WHERE no='1' ";
	$hasil5=mysql_query($query5) or die(mysql_error());	
	$query2 = "UPDATE kkm SET skor_kkm='$kkm' WHERE nomor='1'";$hasil2 = mysql_query($query2) or die(mysql_error());
	mysql_close($koneksi5);
	//////////
	$koneksi6=mysql_connect("localhost","root","") or die(mysql_error()); mysql_select_db("raportk13_6",$koneksi6) or die(mysql_error());
	$query5="UPDATE data_sekolah SET nama_sekolah='$namasekolah', nss='$nss', alamat='$alamat', kode_pos='$kodepos', telepon='$telp', kelurahan='$kel', 
			kecamatan='$kec', kabupaten='$kab', provinsi='$prov', website='$web', email='$email', kepala_sekolah='$kepsek', nip_kepsek='$nipkepsek' WHERE no='1' ";
	$hasil5=mysql_query($query5) or die(mysql_error());	
	$query2 = "UPDATE kkm SET skor_kkm='$kkm' WHERE nomor='1'";$hasil2 = mysql_query($query2) or die(mysql_error());
	mysql_close($koneksi6);
	
}

	mysql_close($koneksi);
echo"</p>";
?>