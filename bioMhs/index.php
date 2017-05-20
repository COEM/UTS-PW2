<!DOCTYPE html>
<html>
<head>
	<title></title>
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
							<form action="" method="POST">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input type="text" name="namaMhs" class="form-control" required>
								</div>
								<div class="form-group">
									<label>NIM</label>
									<input type="text" name="nimMhs" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Tempat Lahir</label>
									<input type="text" name="tmptMhs" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Tanggal Lahir</label>
									<div class="row">
										<div class="col-md-4">
											<input type="number" name="tglMhs" required class="form-control" min="1" max="31">
										</div>
										<div class="col-md-4">
											<select class="form-control input-group" name="blnMhs">
												<option value="Januari">Januari</option>
												<option value="Februari">Februari</option>
												<option value="Maret">Maret</option>
												<option value="April">April</option>
												<option value="Mei">Mei</option>
												<option value="Juni">Juni</option>
												<option value="Juli">Juli</option>
												<option value="Agustus">Agustus</option>
												<option value="September">September</option>
												<option value="Oktober">Oktober</option>
												<option value="November">November</option>
												<option value="Desember">Desember</option>
											</select>
										</div>
										<div class="col-md-4">
											<input type="number" name="thnMhs" required class="form-control" min="1000" max="2500">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>No Telp</label>
									<input type="text" name="telpMhs" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Alamat Email</label>
									<input type="email" name="emailMhs" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Alamat Rumah</label>
									<textarea class="form-control" name="almtMhs" required style="resize:none;"></textarea>
								</div>
								<div class="form-group">
									<label>Asal Sekolah</label>
									<input type="text" name="sklhMhs" class="form-control" required>
								</div>
								<div class="form-group">
									<label>Program Study</label>
									<select class="form-control input-group" name="studyMhs">
										<option value="Prodi Informatika">Prodi Informatika</option>
										<option value="Prodi Elektronika">Prodi Elektronika</option>
										<option value="Prodi Listrik">Prodi Listrik</option>
									</select>
								</div>
								<button class="btn btn-success pull-right" type="submit">Simpan</button>
								<br>
							</form>
						</div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>
