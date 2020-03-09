
<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>

</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				

				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>

				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">
					
				</div>
				<form action="/pegawai/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

			</div>
		</div>
	</div>
	
</body>
</html>
