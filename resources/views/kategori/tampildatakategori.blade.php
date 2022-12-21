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
											<h2 class="text-center mb-4">UPDATE DATA KATEGORI</h2>
											<br>
											<form action="/updatedatakategori/{{ $data->id }}" method="POST" enctype="multipart/form-data" >
												@csrf

												<!--ID KATEGORI -->
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Id Kategori</h5></label>
													<input type="text" name="idkategori" readonly="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->idkategori }}">
												</div>
												@error('idkategori')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<!-- KATEGORI -->
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kategori Barang</h5></label>
													<input type="text" name="kategori" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kategori }}">
												</div>
												@error('kategori')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<br>
												<button type="submit" class="btn btn-primary">Update Kategori</button>
												<a href="/kategori" class="btn btn-danger mb-10">Kembali</a>
												
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