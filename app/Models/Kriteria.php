<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kriteria extends Model
{
    use HasFactory;
    protected $fillable = ['kriteria_hafalan','kriteria_tajwid','kriteria_nada'];
}
