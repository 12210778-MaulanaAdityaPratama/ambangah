<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukModel extends Model
{
    use HasFactory;
    protected $table = 'penduduk';
    protected $fillable = [
        'laki_laki',
        'perempuan',
        'balita',
    ];
}
