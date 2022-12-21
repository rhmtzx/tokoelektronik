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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css" />

  <link rel="stylesheet" href="style2.css">

  <title>CRUD LARAVEL</title>
</head>
<body>
  <h1 class="text-center mb-4">- - - Data Karyawan - - -</h1>
  
  <div class="container">
    <a href="/tambahpegawai" type="button" class="btn btn-success">Tambah Data Karyawan +</a>
    <div class="row">


      <!-- DEATH CODE @if ($message = Session::get('success')) 
      <div class="alert alert-success" role="alert">
        {{ $message }}
      </div>
      @endif --}} -->


      <table class="table" id="data">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Foto</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Hobi</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Agama</th>
            <th scope="col">Created</th>
            <th scope="col">Updated</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>

          @php
          $no = 1;
          @endphp

          @foreach ($data as $index => $row)
          <tr>
            <th scope="row">{{ $index + $data->firstitem() }}</th>
            <td>{{ $row-> nama }}</td>
            <td>
                <img src="{{ asset('fotosupplier/'.$row->foto ) }}" alt="" style="width: 40px;">
            </td>
            <td>{{ $row-> jeniskelamin }}</td>
            <td>{{ $row-> hobi }}</td>
            <td>0{{ $row-> notelepon }}</td>
            <td>{{ $row-> agama }}</td>
            <td>{{ $row->created_at->diffForHumans() }}</td>
            <td>{{ $row->updated_at->diffForHumans() }}</td>
            <td>
              <a href="/tampilkandata/{{ $row-> id }}" class="btn btn-warning">Edit</a>
              <a href="#" class="btn btn-danger delete" data-id="{{ $row-> id }}" data-nama="{{ $row-> nama }}" >Delete</a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
<!-- {{ $data->links() }} -->    
</div>
</div>




<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#data').DataTable();
    });
  </script>




</body>
<script>
  $('.delete').click( function(){

    var pegawaiid = $(this).attr('data-id');
    var nama = $(this).attr('data-nama');
    
    swal({
      title: "Yakin Ingin Delete Data ?",
      text: "Kamu Yakin Akan Menghapus Data Karyawan Dengan Nama "+nama+" ",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })

    .then((willDelete) => {
      if (willDelete) {
        window.location = "/delete/"+pegawaiid+""
        swal("Data Karyawan Dengan Nama "+nama+" Berhasil Di Hapus", {
          icon: "success",
        });
      } else {
        swal("Data Karyawan Dengan Nama "+nama+" Gagal Di Hapus");
      }
    });
  });



</script>

<script>
  @if (Session::has('success'))

  toastr.success("{{ Session::get('success') }}")

  @endif
</script>

</html>

@endsection