<?php
	error_reporting(0);
	!empty($_POST['namaMhs']) ? $nama = trim(ucfirst($_POST['namaMhs'])) : $nama = "Masukkan nama Mahasiswa";
	preg_match('/^[0-9]+$/', $_POST['nimMhs']) ? $nim = $_POST['nimMhs'] : $nim = "Masukkan NIM Mahasiswa dengan benar";
	!empty($_POST['tmptMhs']) ? $tmpt = $_POST['tmptMhs'] : $tmpt = "Masukkan Tempat lahir mahasiswa dengan benar";
	is_numeric($_POST['tglMhs']) ? $tgl = $_POST['tglMhs'] : $tgl = "Tanggal lahir hanya berupa angka";
	!empty($_POST['blnMhs']) ? $bln = $_POST['blnMhs'] : $bln = "Masukkan bulan lahir dengan benar";
	!empty($thn = $_POST['thnMhs']) ? $thn = $_POST['thnMhs'] : $thn = "Masukkan tahun lahir dengan benar";
	!empty($_POST['telpMhs']) ? $telp = $_POST['telpMhs'] : $telp = "Masukkan nomor telepon dengan benar";
	!empty($_POST['emailMhs']) ? $email = $_POST['emailMhs'] : $email = "Masukkan email dengan benar";
	!empty($_POST['almtMhs']) ? $almt = $_POST['almtMhs'] : $almt = "Masukkan alamat mahasiswa dengan benar";
	!empty($_POST['sklhMhs']) ? $sklh = $_POST['sklhMhs'] : $sklh = "Masukkan asal sekolah dengan benar";
	!empty($_POST['studyMhs']) ? $study = $_POST['studyMhs'] : $study = "Masukkan program studi dengan benar";

	$mahasiswa = [
		'Nama Mahasiswa : ' => $nama,
		'NIM : ' => $nim,
		'Tempat Lahir : ' => $tmpt,
		'Tanggal Lahir : ' => $tgl.' - '.$bln.' - '.$thn,
		'No. Telp : ' => $telp,
		'Alamat E-Mail : '=> $email,
		'Alamat Rumah : '=> $almt,
		'Asal Sekolah : ' => $sklh,
		'Program Studi : ' => $study
	];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Biodata Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">
</head>

<body>
	<div class="container">
			<br>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-primary">
						<div class="panel-body">
							<h1 style="text-align: center;">Biodata Mahasiswa</h1>
							<br>
								<?php
									foreach ($mahasiswa as $data => $value) {
										echo "<p>".$data.$value.'</p>';
									}
								?>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>