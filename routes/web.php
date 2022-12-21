<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangkeluarController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\LoginController;
use App\Models\Barangkeluar;
use App\Models\Barangmasuk;
use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Pelanggan;
use App\Models\Supplier;
use App\Models\Employee;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.p Now create something great!
|
*/
	
Route::get('/', function () {
    return view('login.login');
});

Route::get('welcome', function () {
	$barangkeluar = barangkeluar::count();
	$barangmasuk = barangmasuk::count();
	$barang = barang::count();
	$kategori = kategori::count();
	$pelanggan = pelanggan::count();
	$supplier = supplier::count();
	$pegawai = employee::count();

    return view('welcome',compact('barangkeluar','barangmasuk','barang','kategori','pelanggan','supplier','pegawai'));
})->middleware('auth');

// //tentangkami
// Route::get('tentangkami', function () {
//     return view('tentangkami.datatentangkami');
// });


//pegawai
Route::get('/pegawai',[EmployeeController::class,'index'])->name('pegawai')->middleware('auth'); 
Route::get('/tambahpegawai',[EmployeeController::class,'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata',[EmployeeController::class,'insertdata'])->name('insertdata');
Route::get('/tampildata/{id}',[EmployeeController::class,'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[EmployeeController::class,'updatedata'])->name('updatedata');
Route::get('/delete/{id}',[EmployeeController::class,'delete'])->name('delete');

//supplier
Route::get('/supplier',[SupplierController::class,'supplier'])->name('supplier')->middleware('auth'); 
Route::get('/tambahsupplier',[SupplierController::class,'tambahsupplier'])->name('tambahsupplier');
Route::post('/insertdatasupplier',[SupplierController::class,'insertdatasupplier'])->name('insertdatasupplier');
Route::get('/tampildatasupplier/{id}',[SupplierController::class,'tampildatasupplier'])->name('tampildatasupplier');
Route::post('/updatedatasupplier/{id}',[SupplierController::class,'updatedatasupplier'])->name('updatedatasupplier');
Route::get('/deletesupplier/{id}',[SupplierController::class,'deletesupplier'])->name('deletesupplier');

//kategori
Route::get('/kategori',[KategoriController::class,'kategori'])->name('kategori')->middleware('auth'); 
Route::get('/tambahkategori',[KategoriController::class,'tambahkategori'])->name('tambahkategori');
Route::post('/insertdatakategori',[KategoriController::class,'insertdatakategori'])->name('insertdatakategori');
Route::get('/tampildatakategori/{id}',[KategoriController::class,'tampildatakategori'])->name('tampildatakategori');
Route::post('/updatedatakategori/{id}',[KategoriController::class,'updatedatakategori'])->name('updatedatakategori');
Route::get('/deletekategori/{id}',[KategoriController::class,'deletekategori'])->name('deletekategori');

//pelanggan
Route::get('/pelanggan',[PelangganController::class,'pelanggan'])->name('pelanggan')->middleware('auth'); 
Route::get('/tambahpelanggan',[PelangganController::class,'tambahpelanggan'])->name('tambahpelanggan');
Route::post('/insertdatapelanggan',[PelangganController::class,'insertdatapelanggan'])->name('insertdatapelanggan');
Route::get('/tampildatapelanggan/{id}',[PelangganController::class,'tampildatapelanggan'])->name('tampildatapelanggan');
Route::post('/updatedatapelanggan/{id}',[PelangganController::class,'updatedatapelanggan'])->name('updatedatapelanggan');
Route::get('/deletepelanggan/{id}',[PelangganController::class,'deletepelanggan'])->name('deletepelanggan');

//barang
Route::get('/barang',[BarangController::class,'barang'])->name('barang')->middleware('auth'); 
Route::get('/tambahbarang',[BarangController::class,'tambahbarang'])->name('tambahbarang');
Route::post('/insertdatabarang',[BarangController::class,'insertdatabarang'])->name('insertdatabarang');
Route::get('/tampildatabarang/{id}',[BarangController::class,'tampildatabarang'])->name('tampildatabarang');
Route::post('/updatedatabarang/{id}',[BarangController::class,'updatedatabarang'])->name('updatedatabarang');
Route::get('/deletebarang/{id}',[BarangController::class,'deletebarang'])->name('deletebarang');

//barangmasuk
Route::get('/barangmasuk',[BarangmasukController::class,'barangmasuk'])->name('barangmasuk')->middleware('auth'); 
Route::get('/tambahbarangmasuk',[BarangmasukController::class,'tambahbarangmasuk'])->name('tambahbarangmasuk');
Route::post('/insertdatabarangmasuk',[BarangmasukController::class,'insertdatabarangmasuk'])->name('insertdatabarangmasuk');
Route::get('/tampildatabarangmasuk/{id}',[BarangmasukController::class,'tampildatabarangmasuk'])->name('tampildatabarangmasuk');
Route::post('/updatedatabarangmasuk/{id}',[BarangmasukController::class,'updatedatabarangmasuk'])->name('updatedatabarangmasuk');
Route::get('/deletebarangmasuk/{id}',[BarangmasukController::class,'deletebarangmasuk'])->name('deletebarangmasuk');

//barangkeluar
Route::get('/barangkeluar',[BarangkeluarController::class,'barangkeluar'])->name('barangkeluar')->middleware('auth'); 
Route::get('/tambahbarangkeluar',[BarangkeluarController::class,'tambahbarangkeluar'])->name('tambahbarangkeluar');
Route::post('/insertdatabarangkeluar',[BarangkeluarController::class,'insertdatabarangkeluar'])->name('insertdatabarangkeluar');
Route::get('/tampildatabarangkeluar/{id}',[BarangkeluarController::class,'tampildatabarangkeluar'])->name('tampildatabarangkeluar');
Route::post('/updatedatabarangkeluar/{id}',[BarangkeluarController::class,'updatedatabarangkeluar'])->name('updatedatabarangkeluar');
Route::get('/deletebarangkeluar/{id}',[BarangkeluarController::class,'deletebarangkeluar'])->name('deletebarangkeluar');

//login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');








