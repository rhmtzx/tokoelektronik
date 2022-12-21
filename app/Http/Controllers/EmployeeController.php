<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
	public function index (){

		$data = Employee::paginate();
		return view('pegawai.datapegawai',compact('data'));
	}

	public function tambahpegawai (){
		return view('pegawai.tambahdata');
	}


    public function insertdata (Request $request){ //UNTUK MENAMBAHKAN DATA

    	$this->validate($request,[
    		'nama' => 'required',
    		'notelepon' => 'required',
    		'jeniskelamin' => 'required',
    		'hobi' => 'required',
    		'agama' => 'required',
    		'foto' => 'required','unique:posts',
    	],[
    		'nama.required' => 'Nama Harus Diisi',
    		'notelepon.required' => 'No Telepon Harus Diisi',
    		'jeniskelamin.required' => 'Pilih Minimal 1 Jenis Kelamin',
    		'hobi.required' => 'Pilih Minimal 1 Hobi',
    		'agama.required' => 'Pilih Agama',
    		'foto.required' => 'Upload Minimal 1 Foto',
    	]);

    	$data = Employee::create([
    		'nama' => $request->nama,
    		'notelepon' => $request->notelepon,
    		'jeniskelamin' => $request->jeniskelamin,
    		'hobi' => implode(',',$request->hobi),
    		'agama' => $request->agama,
    		'foto' => $request->foto,
    	]);

    	if ($request->hasFile('foto')){
    		$request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
    		$data->foto = $request->file('foto')->getClientOriginalName();
    		$data->save();
    	}

    	return redirect()->route('pegawai')->with('success','Data Pegawai Berhasil Ditambahkan');
    }

    public function tampildata ($id){ //UNTUK MENAMPILKAN DATA
    	$data = Employee::findOrfail($id);
    	//dd($data);
    	return view('Pegawai.tampildata',compact('data'));
    	
    }

    public function updatedata (request $request, $id){ //UNTUK MENGUPDATE DATA
    	$data = Employee::find($id);
    	
    	if ($request->hasFile('foto')){
    		
    		$request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
    		$foto = $request->file('foto')->getClientOriginalName();
    		$data->update([
    		'nama' => $request->nama,
    		'notelepon' => $request->notelepon,
    		'jeniskelamin' => $request->jeniskelamin,
    		'hobi' => implode(',',$request->hobi),
    		'agama' => $request->agama,
    		'foto' => $foto,
    	]);
    		// $data->save();	
    	}else{
    		$data->update([
    		'nama' => $request->nama,
    		'notelepon' => $request->notelepon,
    		'jeniskelamin' => $request->jeniskelamin,
    		'hobi' => implode(',',$request->hobi),
    		'agama' => $request->agama
    	]);
    	}
    	return redirect()->route('pegawai')->with('success','Data Pegawai Berhasil Di Update');

    }

    public function delete($id){ //UNTUK MENDELETE DATA
    	$data = Employee::find($id);
    	$data->delete();
    	return redirect()->route('pegawai')->with('success','Data Pegawai Berhasil Di Hapus');
    }
}
