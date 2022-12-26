<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Barang;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
     public function kategori (){

		$data = Kategori::all();
		return view('kategori.datakategori',compact('data'));
	}

	public function tambahkategori (){     
		return view('kategori.tambahdatakategori');
	}


    public function insertdatakategori (Request $request){ //UNTUK MENAMBAHKAN DATA

    	$this->validate($request,[
            
    		'kategori' => 'unique:kategoris',
    		
    		
    	],[
            
    		'kategori.unique.required' => 'Kategori Harus Diisi',
    		
    	]);

    	$data = Kategori::create([
            
    		'kategori' => $request->kategori,
    		
    	]);


    	return redirect()->route('kategori')->with('success','Data Kategori Berhasil Ditambahkan');
    }

    public function tampildatakategori ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Kategori::findOrfail($id);
    	//dd($data);
    	return view('kategori.tampildatakategori',compact('data'));
    	
    }

    public function updatedatakategori (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Kategori::find($id);
    	
    		$data->update([
    		
            'kategori' => $request->kategori,
    		
    	]);
    	
    	return redirect()->route('kategori')->with('success','Data Kategori Berhasil Di Update');

    }

    public function deletekategori($id){ //UNTUK MENDELETE DATA
        $count = Barang::where('kategori_id', $id)->count();
            if($count > 0){
                return back()->with('error', 'Kategori Sedang Digunakan');
    }
    	$data = Kategori::find($id);
    	$data->delete();
    	return redirect()->route('kategori')->with('success','Data Kategori Berhasil Di Hapus');
    }
}


