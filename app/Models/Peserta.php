<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_peserta';
    protected $fillable = ['nilai_hafalan','nilai_tajwid','nilai_nada'];
}
