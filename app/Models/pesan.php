<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    use HasFactory;

    protected $fillable = ['firt_name', 'last_name', 'email', 'phone', 'judul', 'message'];
}
