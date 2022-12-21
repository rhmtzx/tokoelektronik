<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    //Pusat Model Kategori
    public function barang()
    {
    	return $this->hasMany(barang::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
    
    //Pusat Model Kategori
    public function barangmasuk()
    {
    return $this->hasMany(barangmasuk::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
