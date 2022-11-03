<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kemungkinan extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_kemungkinan',
        'nama_kemungkinan',
        'gejala_code',
    ];
}
