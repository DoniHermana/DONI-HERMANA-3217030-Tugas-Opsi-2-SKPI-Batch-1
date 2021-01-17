<!DOCTYPE html>
<html>
<head>
	<title>Dede Rahmah</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <a class="navbar-brand" href="#">Toko Buku</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Data Buku <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/buku/Tambah">Tambah Data</a>
      <a class="nav-item nav-link" href="#">Cetak Data</a>
    </div>
  </div>
</nav>
	<h1>Data Buku</h1>
<table class="table">
	<tr>
		<td>No</td>
		<td>Judul</td>
		<td>Harga</td>
		<td>Aksi</td>
	</tr>
@foreach($buku as $key => $value)
	<tr>
		<td>1</td>
		<td>{{$value->judul}}</td>
		<td>{{$value->harga}}</td>
		<td>
			<a href="/buku/Update/{{$value->No}}" class="btn btn-warning">Update</a>
			<a href="/buku/Delete/{{$value->No}}" class="btn btn-danger">Delete</a>
		</td>
	</tr>
@endforeach
</table>
</body>
</html>	