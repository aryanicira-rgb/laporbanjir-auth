<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            DB::table('mahasiswa')->insert([
                'nama' => $faker->name,
                'nim' => $faker->unique()->numerify('NIM#####'),
                'jurusan' => $faker->randomElement(['Informatika', 'Sistem Informasi', 'Teknik Komputer',]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}