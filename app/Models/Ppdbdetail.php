<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdbdetail extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'link'];

}
