<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesData extends Model
{
    use HasFactory;

    // Nama tabel (jika berbeda dari nama model dalam bentuk jamak lowercase)
    // protected $table = 'sales_data';

    // Kolom yang boleh diisi (mass assignment)
    protected $fillable = [
        'date',
        'sales',
        // tambahkan kolom lain sesuai kebutuhan
    ];

    // Cast tipe data (misalnya, untuk mengubah string date menjadi Carbon instance)
    protected $casts = [
        'date' => 'date',
        'sales' => 'float',
    ];
}