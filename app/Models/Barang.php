<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Barang extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    //Mengambil dari model kategori
	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'kategori_id', 'id');
	}
    //Pusat Model Barang
    public function barangmasuk()
    {
        return $this->hasMany(barangmasuk::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
    //Pusat Model Barang
    public function barangkeluar()
    {
        return $this->hasMany(barangkeluar::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('l, d F Y');
    }










	

}