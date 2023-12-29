<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_penyakit',
        'jenis_penyakit',
    ];
}