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
											<h2 class="text-center mb-4">TAMBAH DATA BARANG KELUAR</h2>
											<br>
											<form action="/insertdatabarangkeluar" method="POST" enctype="multipart\form-data" >

												@csrf
												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kode Pelanggan</h5></label>
													<select class="form-control" name="namapelanggan" id="namapelanggan">
														<option value="" selected disabled>Pilih Pelanggan</option>
														@foreach($pelanggan as $kodes)
														<option value="{{ $kodes->id }}">{{ $kodes->namapelanggan }}</option>
														@endforeach
													</select>
												</div>
												@error('namapelanggan')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Nama Barang</h5></label>
													<select class="form-control" name="namabarang" id="namabarang">
														<option value="" selected disabled>Pilih Nama Barang</option>
														@foreach($barang as $kode)
														<option value="{{ $kode->id }}" data-kodebarang="{{ $kode->kodebarang }}">{{ $kode->namabarang }}</option>
														@endforeach
													</select>
												</div>
												@error('namabarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Kode Barang</h5></label>
													<input type="text" name="kodebarang" class="form-control" id="kodebarang" aria-describedby="emailHelp" placeholder="KB1" readonly="">
												</div>
												@error('kodebarang')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Merk</h5></label>
													<input type="text" name="merk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Infinix">
												</div>
												@error('merk')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror


												<label for=""><h5>Harga Jual</h5></label>
												<div class="input-group mb-3"> <span class="input-group-text">Rp.</span>
													<input type="number" class="form-control" name="hargajual" placeholder="100000"  id="hargajual"> 
												</div>
												@error('hargajual')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<div class="mb-3">
													<label for="exampleInputEmail1" class="form-label"><h5>Jumlah Beli</h5></label>
													<input type="number" name="jumlahbeli" class="form-control" min="1" id="jumlahbeli" placeholder="1">
												</div>
												@error('jumlahbeli')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<label for=""><h5>Total</h5></label>
												<div class="input-group mb-3"> <span class="input-group-text">Rp.</span>
													<input type="number" class="form-control" readonly name="total"  id="total" > 
												</div>
												@error('total')
												<div class="alert alert-danger">{{ $message }}</div>
												@enderror

												<br>
												<button type="submit" class="btn btn-primary">Submit Data Barang Keluar</button>
												<a href="/barangkeluar" class="btn btn-danger mb-10">Kembali</a>

											</form>
										</div>
									</div>
								</div>
							</div>
						</div>




						<!-- Optional JavaScript; choose one of the two! -->

						<!-- Option 1: Bootstrap Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

						<!-- Menjumlah total with js  -->
						<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
						<script>
							$(document).ready(function() {
								$("#jumlahbeli").change(function() {
									var jumlahbeli = $("#jumlahbeli").val();
									var hargajual = $("#hargajual").val();
									var total = jumlahbeli * hargajual
									$("#total").val(total);
								});
							});
							$("#jumlahbeli").keyup(function() {
								var jumlahbeli = $("#jumlahbeli").val();
								var hargajual = $("#hargajual").val();
								var total = jumlahbeli * hargajual
								$("#total").val(total);
							});
						</script>

						<!-- Relationship -->
							<script>
								const namabarang = document.getElementById('namabarang')
								namabarang.onchange = function(e) {
									const kodebarang = e.target.options[e.target.selectedIndex].dataset.kodebarang
									document.getElementById('kodebarang').value = kodebarang;
								}
							</script>


						<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>

@endsection