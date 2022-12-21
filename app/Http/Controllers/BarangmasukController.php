<?php

namespace App\Http\Controllers;

use App\Models\Barang;      
use App\Models\Supplier;    
use App\Models\Kategori;    
use App\Models\Barangmasuk;		
use Illuminate\Http\Request;

class BarangmasukController extends Controller
{
    public function barangmasuk (){

        $data = Barangmasuk::with('Barang','Supplier')->get();
		return view('barangmasuk.databarangmasuk',compact('data'));
	}

	public function tambahbarangmasuk (){
        $data = Barangmasuk::all();
        
        $barang = Barang::all();
        $supplier = Supplier::all();
        // $kategori = Kategori::all();
		return view('barangmasuk.tambahdatabarangmasuk',compact('data','barang','supplier'));
	}


    public function insertdatabarangmasuk (Request $request){ //UNTUK MENAMBAHKAN DATA
    	$this->validate($request,[
    		'namasupplier' => 'required',
    		'namabarang' => 'required',
           
            'merk' => 'required',
    		'jumlahbeli' => 'required',
            'harga'=>'required',
    		'total'=>'required',
  
    	],[
    		'namasupplier.required' => 'namasupplier Harus Diisi',
    		'namabarang.required' => 'namabarang Harus Diisi',

            'merk.required' => 'merk Harus Diisi',
            'jumlahbeli.required' => 'jumlahbeli Harus Diisi',
            'harga.required' => 'harga Harus Diisi',
    		'total.required' => 'total Harus Diisi',
    		
    	]);

    	$data = Barangmasuk::create([
    		'namasupplier' => $request->namasupplier,
    		'namabarang' => $request->namabarang,

            'merk' => $request->merk,
            'jumlahbeli' => $request->jumlahbeli,
            'harga' => $request->harga,
            'total' => $request->total,
    		
    	]);

    	


    	return redirect()->route('barangmasuk')->with('success','Data Barang Masuk Berhasil Ditambahkan');
    }

    public function tampildatabarangmasuk ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Barangmasuk::findOrfail($id);

    	$barang = Barang::all();
        $supplier = Supplier::all();
    	return view('barangmasuk.tampildatabarangmasuk',compact('data','barang','supplier'));
    	
    }

    public function updatedatabarangmasuk (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Barangmasuk::find($id);
    	
    		$data->update([
            'namasupplier' => $request->namasupplier,
            'namabarang' => $request->namabarang,

            'merk' => $request->merk,
            'jumlahbeli' => $request->jumlahbeli,
            'harga' => $request->harga,
            'total' => $request->total,
    	]);
    	
    	return redirect()->route('barangmasuk')->with('success','Data Barang Masuk Berhasil Di Update');

    }

    public function deletebarangmasuk($id){ //UNTUK MENDELETE DATA
    	$data = Barangmasuk::find($id);
    	$data->delete();
    	return redirect()->route('barangmasuk')->with('success','Data Barang Masuk Berhasil Di Hapus');
    }

    // function menampilkanbarangmasuk(){
    //     $namabarang = $_POST['namabarang'];
    //     $s = "SELECT namabarang as namabarang_b FROM t_buuuku WHERE namabarang = '$namabarang'";
    //     $res = $this->db->query($s)->row_array();
    //     echo json_encode($res); 
    // }
}

