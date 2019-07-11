<htmL>
<head>
	<title>Form Validasi</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-4 mx-auto">
		<h2 class="page-header">Form Input</h2>
			<form>
				<div class="form-group">
					<label>Nama</label><br>
					<input type="text" class="form-control" placeholder="Nama Lengkap">
					<label>Alamat</label><br>
					<textarea type="text" class="form-control" cols="40" rows="5" placeholder="Alamat"></textarea>
					<label>Tempat Lahir</label><br>
					<input type="text" class="form-control" placeholder="Tempat Lahir">
					<label>Tanggal Lahir</label><br>
                    <input type="date" class="form-control" placeholder="Tanggal Lahir"><br>
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="gender" value="male" checked> Laki-laki<br>
                    <input type="radio" name="gender" value="female"> Perempuan<br>
                    <button class="btn btn-success" type="submit">Simpan</button>
				</div>	
			</form>
		</div>	
</div>
</div>
</body>
</html>