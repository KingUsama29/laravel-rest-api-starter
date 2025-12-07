<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // ini adalah field yang bisa diisi, jadi fillable ini adalah daftar kolom yang bisa diisi lewat create atau update
    // jika tidak ada di sini, maka tidak bisa diisi lewat create atau update
    // jika ingin mengisi semua kolom, bisa pakai $guarded = [];
    // jika ingin mengisi semua kolom kecuali beberapa, bisa pakai $guarded = ['id'];
    // jika ingin mengisi beberapa kolom saja, bisa pakai $fillable = ['kolom1', 'kolom2'];
    protected $fillable = [
        'name', 
        'price', 
        'stock', 
        'description'
    ];

}
