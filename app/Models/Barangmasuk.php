<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Barangmasuk extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $dates = ['created_at'];

	//Mengambil dari model barang
	public function barang()
	{
		return $this->belongsTo(barang::class, 'namabarang', 'id');
	}
	//Mengambil dari model supplier
	public function supplier()
	{
		return $this->belongsTo(supplier::class, 'namasupplier', 'id');
	}
	//Mengambil dari model kategori
	// public function kategori()
	// {
	// 	return $this->belongsTo(kategori::class, 'kategori', 'id');
	// }
	
	public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }
}
