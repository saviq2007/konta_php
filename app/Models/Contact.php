<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi penamaan
    protected $table = 'contacts';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'phone',
    ];

    // Jika menggunakan timestamps
    public $timestamps = true; // Secara default sudah true

    // Anda bisa menambahkan metode lain jika diperlukan
}
