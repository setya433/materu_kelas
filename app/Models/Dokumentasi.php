<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;
        protected $table = 'dokumentasis';
        protected $fillable = ['id','nama','deskripsi','url','thumb_dokumen'];

}
