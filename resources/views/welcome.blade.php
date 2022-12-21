@extends('layout.main')

@section('content')

<div class="page-content-wrapper">
  <div class="page-content">
    <div class="row">

      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="fadeIn animated bx bx-home icon-color-1"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>

      <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-primary-blue">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h2 class="mb-0 text-white">{{$barangmasuk}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
              </div>
              <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-archive-in"></i>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Barang Masuk</p>
              </div>
              <div class="ms-auto font-14 text-white">{{$barangmasuk}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-voilet">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h2 class="mb-0 text-white">{{$barangkeluar}} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
              </div>
              <div class="ms-auto font-35 text-white"><i class="fadeIn animated bx bx-archive-out"></i>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Barang Keluar</p>
              </div>
              <div class="ms-auto font-14 text-white">{{$barangkeluar}}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-rose">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h2 class="mb-0 text-white">{{ $supplier }} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
              </div>
              <div class="ms-auto font-35 text-white"><i class="bx bx-group"></i>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Jumlah Supplier</p>
              </div>
              <div class="ms-auto font-14 text-white">{{ $supplier }}</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-3">
        <div class="card radius-15 bg-sunset">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <div>
                <h2 class="mb-0 text-white">{{ $pegawai }} <i class='bx bxs-up-arrow-alt font-14 text-white'></i> </h2>
              </div>
              <div class="ms-auto font-35 text-white"><i class="bx bx-group"></i>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div>
                <p class="mb-0 text-white">Jumlah Pegawai</p>
              </div>
              <div class="ms-auto font-14 text-white">{{ $pegawai }}</div>
            </div>
          </div>
        </div>
      </div>

      

      <div class="row">
        <div class="col-15 col-lg-4">
          <div class="card radius-15 bg-info">
            <div class="card-body text-center">
              <div class="widgets-icons mx-auto rounded-circle bg-white"><i class="bx bx-archive"></i>
              </div>
              <h4 class="mb-0 font-weight-bold mt-3 text-white">{{$barang}} </h4>
              <p class="mb-0 text-white">Data Barang</p>
            </div>
          </div>
        </div>
        <div class="col-15 col-lg-4">
          <div class="card radius-15 bg-wall">
            <div class="card-body text-center">
              <div class="widgets-icons mx-auto bg-white rounded-circle"><i class="bx bx-grid-alt"></i>
              </div>
              <h4 class="mb-0 font-weight-bold mt-3 text-white">{{$kategori}}</h4>
              <p class="mb-0 text-white">Kategori Barang</p>
            </div>
          </div>
        </div>
        <div class="col-15 col-lg-4">
          <div class="card radius-15 bg-rose">
            <div class="card-body text-center">
              <div class="widgets-icons mx-auto bg-white rounded-circle"><i class="bx bx-group"></i>
              </div>
              <h4 class="mb-0 font-weight-bold mt-3 text-white">{{$pelanggan}}</h4>
              <p class="mb-0 text-white">Jumlah Pelanggan</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-3">
            <div class="card radius-15">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold">{{ $barangmasuk }} <i class='bx bxs-up-arrow-alt font-14 text-black'></i> </h4>
                    <br>
                    <p class="mb-0">Barang Masuk 2</p>
                  </div>
                  <div class="widgets-icons bg-light-primary text-primary rounded-circle ms-auto"><i class="fadeIn animated bx bx-archive-in"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card radius-15">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold">{{ $barangkeluar }} <i class='bx bxs-up-arrow-alt font-14 text-black'></i> </h4>
                    <br>
                    <p class="mb-0">Barang Keluar 2</p>
                  </div>
                  <div class="widgets-icons bg-light-success text-primary rounded-circle ms-auto"><i class="fadeIn animated bx bx-archive-out"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card radius-15">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold">{{ $supplier }} <i class='bx bxs-up-arrow-alt font-14 text-black'></i> </h4>
                    <br>
                    <p class="mb-0">Jumlah Supplier</p>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger rounded-circle ms-auto"><i class="bx bx-group"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card radius-15">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold">{{ $pegawai }} <i class='bx bxs-up-arrow-alt font-14 text-black'></i> </h4>
                    <br>
                    <p class="mb-0">Jumlah Pegawai</p>
                  </div>
                  <div class="widgets-icons bg-light-danger text-danger rounded-circle ms-auto"><i class="bx bx-group"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-15 col-lg-4">
            <div class="card radius-15">
              <div class="card-body text-center">
                <div class="widgets-icons mx-auto bg-light-primary text-primary rounded-circle"><i class="bx bx-archive"></i>
                </div>
                <h4 class="mb-0 font-weight-bold mt-3">{{ $barang }}</h4>
                <p class="mb-0">barang</p>
              </div>
            </div>
          </div>
          <div class="col-15 col-lg-4">
            <div class="card radius-15">
              <div class="card-body text-center">
                <div class="widgets-icons mx-auto bg-light-success text-success rounded-circle"><i class="bx bx-grid-alt"></i>
                </div>
                <h4 class="mb-0 font-weight-bold mt-3">{{ $kategori }}</h4>
                <p class="mb-0">Kategori</p>
              </div>
            </div>
          </div>
          <div class="col-15 col-lg-4">
            <div class="card radius-15">
              <div class="card-body text-center">
                <div class="widgets-icons mx-auto bg-light-danger text-danger rounded-circle"><i class="bx bx-group"></i>
                </div>
                <h4 class="mb-0 font-weight-bold mt-3">{{ $pelanggan }}</h4>
                <p class="mb-0">Pelanggan</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-primary">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $barangmasuk }} <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h4>
                    <br>
                    <p class="mb-0 text-white">Barang Masuk</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class="fadeIn animated bx bx-archive-in"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-primary">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $barangkeluar }} <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h4>
                    <br>
                    <p class="mb-0 text-white">Barang Keluar</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class="fadeIn animated bx bx-archive-out"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-danger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $supplier }} <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h4>
                    <br>
                    <p class="mb-0 text-white">Jumlah Supplier</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class="bx bx-group"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card radius-15 bg-danger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $pegawai }} <i class='bx bxs-up-arrow-alt font-14 text-white'></i></h4>
                    <br>
                    <p class="mb-0 text-white">Jumlah Pegawai</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class='bx bx-group'></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-15 col-lg-4">
            <div class="card radius-15 bg-primary">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $barang }}</h4>
                    <br>
                    <p class="mb-0 text-white">Data Barang</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class='bx bx-group'></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-15 col-lg-4">
            <div class="card radius-15 bg-success">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $kategori }}</h4>
                    <br>
                    <p class="mb-0 text-white">Data Kategori</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class="bx bx-grid-alt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-15 col-lg-4">
            <div class="card radius-15 bg-danger">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <h4 class="mb-0 font-weight-bold text-white">{{ $pelanggan }}</h4>
                    <br>
                    <p class="mb-0 text-white">Jumlah Pelanggan</p>
                  </div>
                  <div class="font-35 text-white ms-auto"><i class='bx bx-group'></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>


     
      
  

<!-- SUCCES TOASTR -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
  @if (Session::has('success'))
  toastr.success("{{ Session::get('success') }}")
  @endif
</script>

@endsection