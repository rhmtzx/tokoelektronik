@extends('layout.main')

@section('content')

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>SEVENTABLE</title>
</head>
<body>
	<div class="page-content-wrapper">
		<div class="justify-content-center">
			<div class="row-2">
				<div class="col-12 col-lg-12">
					<div class="card-body">
						<div class="container">

							<div class="row justify-content-center">
								<div class="col-12">
									<div class="card">
										<div  class="card-body">
											<h2 class="text-center mb-4">TAMBAH DATA SUPPLIER</h2>
											<br>
											<form action="/insertdatasupplier" method="POST" enctype="multipart\form-data" >

												@csrf


												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Nama Supplier</h5></label>
													<input type="text" name="namasupplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sasha">
												</div>
												@error('namasupplier')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Alamat</h5></label>
													<input type="text" name="alamat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bandung">
												</div>
												@error('alamat')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3 mt-3">
													<div class="mb-3">
														<label for="jeniskelamin" class="form-label"><h5>Jenis Kelamin</h5></label>
														<br>
														<input class="form-check-input" type="radio" value="Laki-laki" name="jeniskelamin" id="jeniskelamin">
														<label class="form-check-label" for="jeniskelamin"><h6>Laki-laki</h6></label>
													</div>

													<div class="mb-3">
														<input class="form-check-input" type="radio" value="Perempuan" name="jeniskelamin" id="jeniskelamin">
														<label class="form-check-label mb-2" for="jeniskelamin"><h6>Perempuan</h6></label>
													</div>
												</div>
												@error('jeniskelamin')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>No Telepon</h5></label>
													<input type="number" name="notelepon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="12345">
												</div>
												@error('notelepon')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Masukkan Foto</h5></label>
													<input type="file" name="foto" class="form-control" >
												</div>
												@error('foto')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror


												<button type="submit" class="btn btn-primary">Submit Data</button>
												<a href="/supplier" class="btn btn-danger mb-10">Kembali</a>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>




						<!-- Optional JavaScript; choose one of the two! -->

						<!-- Option 1: Bootstrap Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

						<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>

@endsection