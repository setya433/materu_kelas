<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0 ;$i < 10; $i++) {
            DB::table('materi_table')->insert([
                'judul_materi' => $faker->sentence(),
                'deskripsi' => $faker->text(),
                'tanggal_upload' => $faker->date(),
            ]);
        }
    }
}
