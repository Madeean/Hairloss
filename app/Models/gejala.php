<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_gejala',
        'jenis_gejala',
    ];
}