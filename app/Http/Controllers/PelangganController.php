<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Barangkeluar;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function pelanggan (){

		$data = Pelanggan::all();
		return view('pelanggan.datapelanggan',compact('data'));
	}

	public function tambahpelanggan (){
		return view('pelanggan.tambahdatapelanggan');
	}


    public function insertdatapelanggan (Request $request){ //UNTUK MENAMBAHKAN DATA

    	$this->validate($request,[
    		'namapelanggan' => 'required',
    		'alamat' => 'required',
    		'notelepon' => 'required',
    		
  
    	],[
    		'namapelanggan.required' => 'Nama Pelanggan Harus Diisi',
    		'alamat.required' => 'Alamat Harus Diisi',
    		'notelepon.required' => 'No Telepon Harus Diisi',
    		
    	]);

    	$data = Pelanggan::create([
    		'namapelanggan' => $request->namapelanggan,
    		'alamat' => $request->alamat,
    		'notelepon' => $request->notelepon,
    		
    	]);

    	


    	return redirect()->route('pelanggan')->with('success','Data Pelanggan Berhasil Ditambahkan');
    }

    public function tampildatapelanggan ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Pelanggan::findOrfail($id);
    	//dd($data);
    	return view('pelanggan.tampildatapelanggan',compact('data'));
    	
    }

    public function updatedatapelanggan (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Pelanggan::find($id);
    	
    		$data->update([
    		'namapelanggan' => $request->namapelanggan,
    		'alamat' => $request->alamat,
    		'notelepon' => $request->notelepon,
    	]);
    	
    	return redirect()->route('pelanggan')->with('success','Data Pelanggan Berhasil Di Update');

    }

    public function deletepelanggan($id){ //UNTUK MENDELETE DATA
        $count = Barangkeluar::where('namapelanggan', $id)->count();
            if($count > 0){
                return back()->with('error', 'Nama Pelanggan Sedang Digunakan');
    }
    	$data = Pelanggan::find($id);
    	$data->delete();
    	return redirect()->route('pelanggan')->with('success','Data Pelanggan Berhasil Di Hapus');
    }
}


