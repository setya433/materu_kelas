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
        Schema::table('materi_table', function (Blueprint $table) {
            $table->string('thumbnail_materi')->nullable();
            $table->string('link_url_materi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('materi_table', function (Blueprint $table) {
            $table->dropColumn(['thumbnail_materi', 'link_url_materi']);
        });
    }
};
