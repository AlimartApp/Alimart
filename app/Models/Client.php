<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'pesertas';
    protected $primaryKey = 'id_peserta';
    protected $fillable = ['nilai_hafalan','nilai_tajwid','nilai_nada'];
}
