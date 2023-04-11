<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\edukasi;
use App\Models\rumahSakit;
use App\Models\apotek;
use App\Models\customer;
use App\Models\dokter;
use App\Models\spesialis;

class DatabaseSeeder extends Seeder
{
    // SEED SPESIALIS SEEDER DULU SEBELUM SEED DB:SEED
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        edukasi::factory(10)->create();
        rumahSakit::factory(10)->create();
        apotek::factory(10)->create();
        customer::factory(10)->create();
        // spesialis::call(SpesialisSeeder::class);
        dokter::factory(10)->create();

    }
}
