<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cars;
use App\Models\Tipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       User::factory()->create([
           'name' => 'Aldy Hidayatullah',
           'username' => 'aldy',
           'email' => 'aldy@gmail.com',
           'password' => bcrypt('admin'),
           'is_admin' => true,
       ]);
        Cars::factory()->create([
            'tipe_id'=> 1,
            'nama_mobil' => "Honda Jazz",
            'harga_sewa' => 450000,
            'jumlah_penumpang' => 4,
            "image" => "honda_jazz.jpg"
        ]);
        Cars::factory()->create([
            'tipe_id'=> 2,
            'nama_mobil' => "Toyota Innova Reborn",
            'harga_sewa' => 550000,
            'jumlah_penumpang' => 6,
            "image" => "innova_reborn.jpg"
        ]);
        Cars::factory()->create([
            'tipe_id'=> 2,
            'nama_mobil' => "Toyota Avanza",
            'harga_sewa' => 350000,
            'jumlah_penumpang' => 6,
            "image" => "avanza.jpeg"
        ]);
        Cars::factory()->create([
            'tipe_id'=> 1,
            'nama_mobil' => "Toyota Yaris",
            'harga_sewa' => 400000,
            'jumlah_penumpang' => 4,
            "image" => "yaris.jpg"
        ]);
        Tipe::factory()->create([
            "nama_tipe" => "Hatchback"
        ]);
        Tipe::factory()->create([
            "nama_tipe" => "Minibus"
        ]);
    }
}
