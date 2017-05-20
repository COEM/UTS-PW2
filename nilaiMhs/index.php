<?php
	$sum = null;
	$data_list = null;
	if(isset($_POST['nama']) && isset($_POST['nama']) && isset($_POST['nama'])){
		$nama = $_POST['nama'];
		$sks = $_POST['sks'];
		$grade = $_POST['grade'];
		$data_list[] = ['nama' => $nama, "sks" => $sks, "grade" => $grade];
	}

	if (isset($_POST['_nama']) && isset($_POST['_sks']) && isset($_POST['_grade'])) {
		$namaArr = $_POST['_nama'];
		for ($i=0; $i < sizeof($namaArr); $i++) {
			$data_list[] = ['nama' => $_POST['_nama'][$i],"sks" => $_POST['_sks'][$i],"grade" => $_POST['_grade'][$i]];
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Data Nilai Mahasiswa</title>
		<link rel="stylesheet" type="text/css" href="../assets/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../assets/style.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="panel panel-primary box">
						<div class="panel-body">
							<h1>Data Nilai Mahasiswa</h1>
							<br>
							<form action="" method="post">
								<?php
								if(sizeof($data_list) > 0){
									for ($i=0; $i < sizeof($data_list) ; $i++) {
										echo "<input type='hidden' name='_nama[]'  value='".$data_list[$i]['nama']."'>";
										echo "<input type='hidden' name='_sks[]'   value='".$data_list[$i]['sks']."'>";
										echo "<input type='hidden' name='_grade[]' value='".$data_list[$i]['grade']."'>";
									}
								}
								?>
								<div class="form-group">
									<label>Nama Mata Kuliah</label>
									<input type="text" required name="nama" required class="form-control">
								</div>
								<div class="form-group">
									<label>Jumlah SKS</label>
									<input type="number" required name="sks" required class="form-control">
								</div>
								<div class="form-group">
									<label>Grade Nilai</label>
									<input type="number" required name="grade" required class="form-control">
								</div>
								<br>
								<input type="submit" value="Simpan Data" class="btn btn-success pull-right">
								<br>
							</form>
							<br><hr><br>
							<h3>Data Nilai Mahasiswa</h3>
							<table class="table">
								<thead>
									<th>Nama Mata Kuliah</th>
									<th>SKS</th>
									<th>Grade</th>
									<th>Sub Total</th>
								</thead>
								<?php
								if (sizeof($data_list) > 0) {
									foreach (array_reverse($data_list) as $key) {
										echo "<tr>";
										echo "<td>".$key['nama']."</td>";
										echo "<td>".$key['sks']."</td>";
										echo "<td>".$key['grade']."</td>";
										echo "<td>".$key['grade']*$key['sks']."</td>";
										echo "</tr>";
									}
								}
								?>
								<tfoot>
									<th colspan="3">Total</th>
									<?php
									if (sizeof($data_list) > 0) {
										for ($i=0; $i < sizeof($data_list) ; $i++) {
											$sum += $data_list[$i]['grade'] * $data_list[$i]['sks'];
										}
										echo "<th>$sum</th>";
									} else {
										echo "<th>0</th>";
									}
									?>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>

	</body>
</html>
