<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unitsekolah extends Model
{
    use HasFactory;

    protected $fillable = ['nama_unit','alamat_unit','deskripsi','link'];
}
