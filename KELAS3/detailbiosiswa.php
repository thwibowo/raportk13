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
                            <a href="datagurusekolah.php"><i class="fa fa-home fa-fw"></i>Data Sekolah &amp Guru Kelas</a>
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
                    <h3 class="page-header"><p align="center">Detail Biodata Siswa</p></h3>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
<?php
 echo"<p align='center'>";
	//include("tombol.htm");
	$nipd=$_GET['nipd'];	
	//buka koneksi ke system mysql
	$koneksi=mysql_connect("localhost","root","") or die(mysql_error());
	//buka database
	mysql_select_db("raportk13_3",$koneksi) or die(mysql_error());
	//search query
	$query="SELECT*FROM data_siswa WHERE no_induk ='$nipd'";
	//eksekusi query
	$hasil=mysql_query($query) or die(mysql_error());
	//jika tdk ktmu
	if (mysql_num_rows($hasil)==0)
	{ echo "Maaf, data siswa yang dituju tidak ada!";
	}
	 else
	 //jika jumlah baris hasil >0
	 //ambil data dari array, masukkan ke variable
	{ $data = mysql_fetch_array($hasil);
	  $nabsen=$data[0];
	  $tahunajar=$data[1];
	  $nama=$data[3];
	  $tml=$data[4];
	  $tl=$data[5];
	  $thn= substr ($tl,0,4); //ambil tahun lahir
	  $bln= substr ($tl,5,2); //ambil bulan lahir
	  $tgl= substr ($tl,8,2); //ambil tanggal lahir
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
	}
	
	mysql_close($koneksi);
echo"</p>";
?>

	<form name="isian" method="GET" action="simpandetailbiosiswa.php">
	<p align="center">
	<table border="0">
	<tr>
	<td>Tahun Ajaran</td><td>:</td><td><input type="hidden" name="tahunajar" value="<?php echo $tahunajar ?>"><?php echo $tahunajar ?><br></td>
	</tr>
	<tr>
	<td>No. Absen</td><td>:</td><td><input type="hidden" name="nabsen" size="10" value="<?php echo $nabsen?>"><?php echo $nabsen?><br></td>
	</tr>
	<tr>
	<td>No. Induk</td><td>:</td><td><input type="hidden" name="nipd" value="<?php echo $nipd?>"><?php echo $nipd?><br></td>
	</tr>
	<tr>
	<td>Nama Peserta Didik</td><td>:</td><td><input type="text" name="nama"  size="40" value="<?php echo $nama?>" autofocus required><br></td>
	</tr>
	<tr>
	<td>Tempat Lahir</td><td>:</td><td><input type="text" name="tml" size="30" value="<?php echo $tml?>" autofocus required><br></td>
	</tr>
	<tr>
	<td>Tanggal Lahir <b>(Tanggal/Bulan/Tahun)</b></td><td>:</td>
						<td><input type="text" size="5" name="tgl" value="<?php echo $tgl?>" autofocus required>
							<input type="text" size="5" name="bln" value="<?php echo $bln?>" autofocus required>
							<input type="text" size="5" name="thn" value="<?php echo $thn?>" autofocus required><br>
						</td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="jk" value="Laki-laki" <?php echo $jk=="Laki-laki"?'checked':' ';?> autofocus required>Laki-laki
							   <input type="radio" name="jk" value="Perempuan" <?php echo $jk=="Perempuan"?'checked':' ';?> autofocus required>Perempuan
						<br>
	</td>
	</tr>
	<tr>
	<td>Agama</td><td>:</td><td><input type="text" name="agama" size="30" value="<?php echo $agama?>"><br></td>
	</tr>
	<tr>
	<td>Pendidikan Sebelumnya</td><td>:</td><td><input type="text" name="pends" value="<?php echo $pends?>"><br></td>
	</tr>
	<tr>
	<td>Alamat Peserta Didik</td><td>:</td><td><input type="text" name="alamat" size="50" value="<?php echo $alamat?>"><br></td>
	</tr>
	<tr>
	<td><u><b>Nama Orang Tua</b></u></td><td><br></td>
	</tr>
	<tr>
	<td>Nama Ayah</td><td>:</td><td><input type="text" name="na" size="40" value="<?php echo $na?>"><br></td>
	</tr>
	<tr>
	<td>Nama Ibu</td><td>:</td><td><input type="text" name="ni" size="40" value="<?php echo $ni?>"><br></td>
	</tr>
	<tr>
	<td><u><b>Pekerjaan Orang Tua</b></u><br></td>
	</tr>
	<tr>
	<td>Pekerjaan Ayah</td><td>:</td><td><input type="text" name="pa" size="30" value="<?php echo $pa?>"><br></td>
	</tr>
	<tr>
	<td>Pekerjaan Ibu</td><td>:</td><td><input type="text" name="pi" size="30" value="<?php echo $pi?>"><br></td>
	</tr>
	<tr>
	<td><u><b>Alamat Orang Tua</b></u><br></td>
	</tr>
	<tr>
	<td>Jalan</td><td>:</td><td><input type="text" name="jalan" size="50" value="<?php echo $jalan?>"><br></td>
	</tr>
	<tr>
	<td>Kelurahan/Desa</td><td>:</td><td><input type="text" name="kel" size="30" value="<?php echo $kel?>"><br></td>
	</tr>
	<tr>
	<td>Kecamatan</td><td>:</td><td><input type="text" name="kec" size="30" value="<?php echo $kec?>"><br></td>
	</tr>
	<tr>
	<td>Kabupaten/Kota</td><td>:</td><td><input type="text" name="kab" size="30" value="<?php echo $kab?>"><br></td>
	</tr>
	<tr>
	<td>Provinsi</td><td>:</td><td><input type="text" name="prov" size="30" value="<?php echo $prov?>"><br></td>
	</tr>
	<tr>
	<td><u><b>Wali Peserta Didik</b></u><br></td>
	</tr>
	<tr>
	<td>Nama Wali</td><td>:</td><td><input type="text" name="nw" size="40" value="<?php echo $nw?>"><br></td>
	</tr>
	<tr>
	<td>Pekerjaan</td><td>:</td><td><input type="text" name="pw" size="30" value="<?php echo $pw?>"><br></td>
	</tr>
	<tr>
	<td>Alamat</td><td>:</td><td><input type="text" name="aw" size="50" value="<?php echo $aw?>"><br></td>
	</tr>
	
	</table>
	<br>
					
	<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
	<button type="reset" class="btn btn-danger" name="hapus">Reset</button>
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
	