<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class herodetail extends Model
{
    use HasFactory;

    protected $fillable = ['gambar', 'is_active'];
}
