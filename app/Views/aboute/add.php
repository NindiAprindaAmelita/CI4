<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Data Diri</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>

<div class="container">
<div class="row">
	<div class="col-lg-12"></div>
	<h1>Form Tambah Data</h1>
</div>
</div>
<form action="/Aboute/simpan" method="POST">

<div class="row mt-3">
	<div class="col-lg-3">
		<label for="">Nama</label>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" name="nama">
	</div>
</div>

<div class="row mt-3">
	<div class="col-lg-3">
		<label for="">Tempat Lahir</label>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" name="tempat_lahir">
	</div>
</div>

<div class="row mt-3">
	<div class="col-lg-3">
		<label for="">Tanggal Lahir</label>
	</div>
	<div class="col-lg-6">
		<input type="date" class="form-control" name="tanggal_lahir">
	</div>
</div>

<div class="row mt-3">
	<div class="col-lg-3">
		<label for="">Alamat</label>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" name="alamat">
	</div>
</div>

<div class="row mt-3">
	<div class="col-lg-3">
		<label for="">NoHp</label>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" name="nohp">
	</div>
</div>

<div class="row mt-3">
	<div class="col-lg-3">
		<label for="">Email</label>
	</div>
	<div class="col-lg-6">
		<input type="text" class="form-control" name="email">
	</div>
</div>
<div class="row">
	<div class="col-lg-9">
		<button class="btn btn-primary">simpan</button>
	</div>
</div>
</form>
</div>

</body>
</html>