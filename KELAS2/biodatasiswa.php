
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi K13 SDN Blimbing 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="/RAPORTK13/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/RAPORTK13/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/RAPORTK13/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/RAPORTK13/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/RAPORTK13/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Aplikasi Raport K13 SDN Blimbing 2 Malang</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-power-off fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profilpembuat.html"><i class="fa fa-user fa-fw"></i> Profil Pembuat Aplikasi</a>
                        </li>
                        <li><a href="tentangaplikasi.html"><i class="fa fa-gear fa-fw"></i> Petunjuk Penggunaan Aplikasi</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="/RAPORTK13/depan.html"><i class="fa fa-sign-out fa-fw"></i> Keluar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="datagurusekolah.php"><i class="fa fa-home fa-fw"></i> Data Sekolah &amp Guru Kelas</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Biodata Siswa<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="biodatasiswa.php">Input Biodata Siswa</a>
                                </li>
								<li>
                                    <a href="tampilbiosiswa.php">Lihat Biodata Siswa</a>
                                </li> 
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Penilaian<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="isinilaispiritual.php">Aspek Spiritual (KI 1)</a>
                                </li>
								<li>
                                    <a href="isinilaisosial.php">Aspek Sosial (KI 2)</a>
                                </li> 
								<li>
                                    <a href="">Aspek Pengetahuan (KI 3)<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="isinilaipengpkn.php">PKN</a>
                                        </li>
                                        <li>
                                            <a href="isinilaipengbi.php">Bahasa Indonesia</a>
                                        </li>
                                        <li>
                                            <a href="isinilaipengmtk.php">Matematika</a>
                                        </li>
                                        <li>
                                            <a href="isinilaipengsbp.php">SBDP</a>
                                        </li>
										<li>
                                            <a href="isinilaipengpjok.php">PJOK</a>
                                        </li>
                                        <li>
                                            <a href="isinilaipengagama.php">Agama</a>
                                        </li>
                                        <li>
                                            <a href="isinilaipengbd.php">Bahasa Jawa</a>
                                        </li>
                                    </ul>
                                </li>
								<li>
                                    <a href="panels-wells.html">Aspek Keterampilan (KI 4)<span class="fa arrow"></span></a>
									<ul class="nav nav-third-level">
                                        <li>
                                            <a href="isinilaiketpkn.php">PKN</a>
                                        </li>
                                        <li>
                                            <a href="isinilaiketbi.php">Bahasa Indonesia</a>
                                        </li>
                                        <li>
                                            <a href="isinilaiketmtk.php">Matematika</a>
                                        </li>
                                        <li>
                                            <a href="isinilaiketsbp.php">SBDP</a>
                                        </li>
										<li>
                                            <a href="isinilaiketpjok.php">PJOK</a>
                                        </li>
                                        <li>
                                            <a href="isinilaiketagama.php">Agama</a>
                                        </li>
                                        <li>
                                            <a href="isinilaiketbd.php">Bahasa Jawa</a>
                                        </li>
                                    </ul>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Catatan Fisik &amp Ekskul<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level">
                                <li>
                                    <a href="catatanfisik.php">Catatan Fisik</a>
                                </li>
								<li>
                                    <a href="daftarhadir.php">Daftar Hadir</a>
                                </li>
								<li>
                                    <a href="ekskulsaran.php">Ekskul &amp Saran</a>
                                </li> 
								<li>
                                    <a href="prestasi.php">Prestasi</a>
                                </li>
							</ul>
						</li>
						<li>
                            <a href="rekapnilai.php"><i class="fa fa-bar-chart-o fa-fw"></i> Rekap Nilai &amp Cetak Raport</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
		<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><p align="center">Form Pengisian Biodata Siswa</p></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php
echo"<p align='center'>";
	//include("tombol.htm");
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	mysql_select_db("raportk13_2",$koneksi) or die(mysql_error());
	$query="SELECT * FROM data_gurukelas";
	$hasil=mysql_query($query) or die(mysql_error());
	$data=mysql_fetch_array ($hasil);
echo"</p>";
?>
	
	<form name="isian" method="GET" action="simpanbiosiswa.php">
	<p align="center">
	<table border="0">
	<tr>
	<td>Tahun Ajaran</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="tahunajar" size="40" readonly value="<?php echo $data[5] ?>"><br></td>
	</tr>
	<tr>
	<td>No. Absen</td><td>:</td><td colspan="3"><input class="form-control" type="text" size="40" name="nabsen" autofocus required><br></td>
	</tr>
	<tr>
	<td>No. Induk</td><td>:</td><td colspan="3"><input class="form-control" type="text" size="40" name="nipd" autofocus required><br></td>
	</tr>
	<tr>
	<td>Nama Peserta Didik</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="nama"  size="40" autofocus required><br></td>
	</tr>
	<tr>
	<td>Tempat Lahir</td><td>:</td><td colspan="3"><input class="form-control" type="text" size="40" name="tml" autofocus required><br></td>
	</tr>
	<tr>
	<td>Tanggal Lahir <b>(Tahun/Bulan/Tanggal)</b></td><td>:</td><td><input class="form-control" type="text" size="5" name="tgl" placeholder="tanggal" autofocus required></td>
						<td><select class="form-control" name="bln" autofocus required>
							<option value='1'>Januari</option>
							<option value='2'>Februari</option>
							<option value='3'>Maret</option>
							<option value='4'>April</option>
							<option value='5'>Mei</option>
							<option value='6'>Juni</option>
							<option value='7'>Juli</option>
							<option value='8'>Agustus</option>
							<option value='9'>September</option>
							<option value='10'>Oktober</option>
							<option value='11'>November</option>
							<option value='12'>Desember</option></select></td>
						<td><input class="form-control" type="text" size="5" name="thn" placeholder="tahun" autofocus required><br></td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td><td>:</td><td colspan="3"><input type="radio" name="jk" value="Laki-laki" autofocus required>Laki-laki
							   <input type="radio" name="jk" value="Perempuan">Perempuan
						<br>
	</td>
	</tr>
	<tr>
	<td>Agama</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="agama" size="30"><br></td>
	</tr>
	<tr>
	<td>Pendidikan Sebelumnya</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="pends"><br></td>
	</tr>
	<tr>
	<td>Alamat Peserta Didik</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="alamat" size="50"><br></td>
	</tr>
	<tr>
	<td><u><b>Nama Orang Tua</b></u></td><td><br></td>
	</tr>
	<tr>
	<td>Nama Ayah</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="na" size="40"><br></td>
	</tr>
	<tr>
	<td>Nama Ibu</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="ni" size="40"><br></td>
	</tr>
	<tr>
	<td><u><b>Pekerjaan Orang Tua</b></u><br></td>
	</tr>
	<tr>
	<td>Pekerjaan Ayah</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="pa" size="30"><br></td>
	</tr>
	<tr>
	<td>Pekerjaan Ibu</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="pi" size="30"><br></td>
	</tr>
	<tr>
	<td><u><b>Alamat Orang Tua</b></u><br></td>
	</tr>
	<tr>
	<td>Jalan</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="jalan" size="50"><br></td>
	</tr>
	<tr>
	<td>Kelurahan/Desa</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="kel" size="30"><br></td>
	</tr>
	<tr>
	<td>Kecamatan</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="kec" size="30"><br></td>
	</tr>
	<tr>
	<td>Kabupaten/Kota</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="kab" size="30"><br></td>
	</tr>
	<tr>
	<td>Provinsi</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="prov" size="30"><br></td>
	</tr>
	<tr>
	<td><u><b>Wali Peserta Didik</b></u><br></td>
	</tr>
	<tr>
	<td>Nama Wali</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="nw" size="40"><br></td>
	</tr>
	<tr>
	<td>Pekerjaan</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="pw" size="30"><br></td>
	</tr>
	<tr>
	<td>Alamat</td><td>:</td><td colspan="3"><input class="form-control" type="text" name="aw" size="50"><br></td>
	</tr>
	
	</table>
	<br>
					
	<button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
	<button type="reset" class="btn btn-danger" name="reset">RESET</button>
	
	</p>
	</form>
</div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/RAPORTK13/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/RAPORTK13/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/RAPORTK13/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/RAPORTK13/vendor/raphael/raphael.min.js"></script>
    <script src="/RAPORTK13/vendor/morrisjs/morris.min.js"></script>
    <script src="/RAPORTK13/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/RAPORTK13/dist/js/sb-admin-2.js"></script>
</body>
