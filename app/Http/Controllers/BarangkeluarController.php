<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;  
use App\Models\Barang;    
use App\Models\Barangkeluar;
use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
     public function barangkeluar (){

        $data = Barangkeluar::with('Barang','Pelanggan')->get();   
		return view('barangkeluar.databarangkeluar',compact('data'));
	}

	public function tambahbarangkeluar (){
		$data = Barangkeluar::all();

        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
        return view('barangkeluar.tambahdatabarangkeluar',compact('data','pelanggan','barang'));
    }


    public function insertdatabarangkeluar (Request $request){ //UNTUK MENAMBAHKAN DATA

    	$this->validate($request,[
    		'namapelanggan' => 'required',
    		'namabarang' => 'required',
    		'kodebarang' => 'required',
    		'merk' => 'required',
            'hargajual' => 'required',
            'jumlahbeli' => 'required',
    		'total' => 'required',
    		
    	],[
    		'namapelanggan.required' => 'Nama Pelanggan Harus Diisi',
    		'namabarang.required' => 'Nama Barang Harus Diisi',
    		'kodebarang.required' => 'Kode Barang Harus Diisi',
    		'merk.required' => 'Merk Harus Diisi',
            'hargajual.required' => 'Harga Jual Harus Diisi',
            'jumlahbeli.required' => 'Jumlah Beli Harus Diisi',
    		'total.required' => 'Total Harus Diisi',
    		
    	]);

    	$data = Barangkeluar::create([
    		'namapelanggan' => $request->namapelanggan,
    		'namabarang' => $request->namabarang,
    		'kodebarang' => $request->kodebarang,
    		'merk' => $request->merk,
            'hargajual' => $request->hargajual,
            'jumlahbeli' => $request->jumlahbeli,
    		'total' => $request->total,
    		
    	]);

    	


    	return redirect()->route('barangkeluar')->with('success','Data Barang Keluar Berhasil Ditambahkan');
    }

    public function tampildatabarangkeluar ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Barangkeluar::findOrfail($id);

        $pelanggan = Pelanggan::all();
        $barang = Barang::all();
    	return view('barangkeluar.tampildatabarangkeluar',compact('data','pelanggan','barang'));
    	
    }

    public function updatedatabarangkeluar (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Barangkeluar::find($id);
    	$data->update([
            'namapelanggan' => $request->namapelanggan,
            'namabarang' => $request->namabarang,
            'kodebarang' => $request->kodebarang,
            'merk' => $request->merk,
            'hargajual' => $request->hargajual,
            'jumlahbeli' => $request->jumlahbeli,
            'total' => $request->total,
    		
    	]);
    	
    	return redirect()->route('barangkeluar')->with('success','Data Barang Keluar Berhasil Di Update');

    }

    public function deletebarangkeluar($id){ //UNTUK MENDELETE DATA
    	$data = Barangkeluar::find($id);
    	$data->delete();
    	return redirect()->route('barangkeluar')->with('success','Data Barang Keluar Berhasil Di Hapus');
    }
}


