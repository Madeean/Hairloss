<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rule extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_penyakit',
        'id_gejala',
        'cf'
    ];
}