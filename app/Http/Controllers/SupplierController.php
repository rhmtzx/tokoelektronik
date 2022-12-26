<?php

namespace App\Http\Controllers;


use App\Models\Supplier;
use App\Models\Barangmasuk;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplier (){

		$data = Supplier::all();
		return view('supplier.datasupplier',compact('data'));
	}

	public function tambahsupplier (){
		return view('supplier.tambahdatasupplier');
	}


    public function insertdatasupplier (Request $request){ //UNTUK MENAMBAHKAN DATA

    	$this->validate($request,[
    	
    		'namasupplier' => 'required',
            'alamat' => 'required',
    		'jeniskelamin' => 'required',
    		'notelepon' => 'required',
            'foto' => 'required','unique:posts',
    		
  
    	],[
    		
    		'namasupplier.required' => 'Data Nama Harus Diisi',
            'alamat.required' => 'Data Alamat Harus Diisi',
    		'jeniskelamin.required' => 'Pilih minamal 1 Jenis Kelamin',
    		'notelepon.required' => 'Data Telepon Harus Diisi',
            'foto.required' => 'Upload Minimal 1 Foto',
    		
    	]);

    	$data = Supplier::create([
    
    		'namasupplier' => $request->namasupplier,
            'alamat' => $request->alamat,
    		'jeniskelamin' => $request->jeniskelamin,
    		'notelepon' => $request->notelepon,
            'foto' => $request->foto,
    		
    	]);

    	if ($request->hasFile('foto')){
            $request->file('foto')->move('fotosupplier/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }


    	return redirect()->route('supplier')->with('success','Data Supplier Berhasil Ditambahkan');
    }

    public function tampildatasupplier ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Supplier::findOrfail($id);
    	//dd($data);
    	return view('supplier.tampildatasupplier',compact('data'));
    	
    }

    public function updatedatasupplier (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Supplier::find($id);
    	
    		$data->update([
    		
    		'namasupplier' => $request->namasupplier,
    		'alamat' => $request->alamat,
            'jeniskelamin' => $request->jeniskelamin,
    		'notelepon' => $request->notelepon,
    	]);

        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotosupplier/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
    	
    	return redirect()->route('supplier')->with('success','Data Supplier Berhasil Di Update');

    }

    public function deletesupplier($id){ 
        $count = Barangmasuk::where('namasupplier', $id)->count();
            if($count > 0){
                return back()->with('error', 'Nama Supplier Sedang Digunakan');
    }
    	$data = Supplier::find($id);
    	$data->delete();
    	return redirect()->route('supplier')->with('success','Data Supplier Berhasil Di Hapus');
    }
}

