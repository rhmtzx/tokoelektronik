<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    protected $dates = ['created_at'];

    //Pusat Model Pelanggan
    public function barangkeluar()
    {
    	return $this->hasMany(barangkeluar::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
