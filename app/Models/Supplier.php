<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at'];

    //Pusat Model Kategori
    public function barangmasuk()
    {
    	return $this->hasMany(barangmasuk::class); //Model tergantung apa yang ingin direlasikan, Model=(berwarna biru)
    }
}
