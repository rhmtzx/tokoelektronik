<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use App\Models\Barangmasuk;
use App\Models\Barangkeluar;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function barang (){

		$data = Barang::with('kategori')->get();
		return view('barang.databarang',compact('data'));
	}

	public function tambahbarang (){
		$data = Barang::all();
		$datas = Kategori::all();
		return view('barang.tambahdatabarang', compact('data','datas'));
	}

    //UNTUK MENAMBAHKAN DATA
    public function insertdatabarang (Request $request){ 

    	$this->validate($request,[
    		'kodebarang' => 'unique:barangs',
    		'namabarang' => 'unique:barangs',
    		'merk' => 'required',
    		'kategori_id' => 'required',
    		'stok' => 'required',
    		'hargabarang' => 'required',
    		'hargajual' => 'required',
    		'foto' => 'required','unique:posts',
    	],[
    		'kodebarang.unique.required' => 'Kode Barang Sudah Ada',
    		'namabarang.unique.required' => 'Nama Barang Sudah Ada',
    		'merk.required' => 'Merk Harus Diisi',
    		'kategori_id.required' => 'Kategori Id Harus Diisi',
    		'stok.required' => 'Stok Harus Diisi',
    		'hargabarang.required' => 'Harga Barang Harus Diisi',
    		'hargajual.required' => 'Harga Jual Harus Diisi',
    		'foto.required' => 'Upload Minimal 1 Foto',    
    	]);

    	$data = Barang::create([
    		'kodebarang' => $request->kodebarang,
    		'namabarang' => $request->namabarang,
    		'merk' => $request->merk,
    		'kategori_id' => $request->kategori_id,
    		'stok' => $request->stok,
    		'hargabarang' => $request->hargabarang,
    		'hargajual' => $request->hargajual,
    		'foto' => $request->foto,
    	]);

    	if ($request->hasFile('foto')){
    		$request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
    		$data->foto = $request->file('foto')->getClientOriginalName();
    		$data->save();
    	}

    	return redirect()->route('barang')->with('success','Data Barang Berhasil Ditambahkan');
    }

    public function tampildatabarang ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Barang::findOrfail($id);

    	$datas = Kategori::all();
    	return view('barang.tampildatabarang',compact('data','datas'));
    	
    }

    public function updatedatabarang (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Barang::find($id);
    	$data->update([
    		'kodebarang' => $request->kodebarang,
    		'namabarang' => $request->namabarang,
    		'merk' => $request->merk,
    		'kategori_id' => $request->kategori_id,
    		'stok' => $request->stok,
    		'hargabarang' => $request->hargabarang,
    		'hargajual' => $request->hargajual,
    	]);
    	
    	if ($request->hasFile('foto')){
    		$request->file('foto')->move('fotobarang/', $request->file('foto')->getClientOriginalName());
    		$data->foto = $request->file('foto')->getClientOriginalName();
    		$data->save();
    		
    	
    	}
    	return redirect()->route('barang')->with('success','Data Barang Berhasil Di Update');

    }

    public function deletebarang($id){ //UNTUK MENDELETE DATA
        $count = Barangmasuk::where('namabarang', $id)->count();
            if($count > 0){
                return back()->with('error', 'Barang Sedang Digunakan');
    }
        $count = Barangkeluar::where('namabarang', $id)->count();
            if($count > 0){
                return back()->with('error', 'Barang Sedang Digunakan');
    }
    	$data = Barang::find($id);
    	$data->delete();
    	return redirect()->route('barang')->with('success','Data Barang Berhasil Di Hapus');
    }
}