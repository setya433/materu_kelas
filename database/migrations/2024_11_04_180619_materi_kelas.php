<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materi_table', function (Blueprint $table) {
            $table->id();
            $table->string('judul_materi');
            $table->text('deskripsi')->nullable();
            $table->string('thumbnail_materi');
            $table->date('tanggal_upload');
            $table->string('link_url_materi');
            $table->string('file_path');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materi_table');
    }
};
