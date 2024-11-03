<?php

// app/Models/Materi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    use HasFactory;

    protected $table = 'materi_table'; // Adjust if necessary
    protected $fillable = ['id', 'judul_materi', 'thumbnail_materi', 'deskripsi', 'tanggal_upload', 'link_url_materi','file_path'];

    // Define relationships if any exist
}

