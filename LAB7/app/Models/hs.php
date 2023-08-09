<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hs extends Model
{
    use HasFactory;

    protected $table='hs';
    protected $primaryKey = 'id';
    protected $dates = ['ngaysinh'];
    protected $fillable = [
        'hoten',
        'tuoi',
        'ngaysinh'
    ];
}
