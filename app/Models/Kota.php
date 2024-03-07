<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kota;

class Kota extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'provinsi'];
}
