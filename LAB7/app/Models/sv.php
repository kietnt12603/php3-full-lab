<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sv extends Model
{
    use HasFactory;

    protected $table='sv';
    protected $dates = ['ngaysinh'];
    protected $fillable = [
        'masv',
        'hoten',
        'tuoi',
        'ngaysinh',
        'cmnd',
        'email'
    ];

}
