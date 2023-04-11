<?php

namespace Database\Seeders;

use App\Models\spesialis;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpesialisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spesialis = [
            [
                'spesialis' => 'Dokter Umum'
            ],
            [
                'spesialis' => 'Spesialis Anak'
            ],
            [
                'spesialis' => 'Spesialis Kulit'
            ],
            [
                'spesialis' => 'THT'
            ],
            [
                'spesialis' => 'Dokter Gigi'
            ],
            [
                'spesialis' => 'Spesialis Kandungan'
            ],
            [
                'spesialis' => 'Spesialis Saraf'
            ],
            [
                'spesialis' => 'Spesialis Jantung'
            ],
            [
                'spesialis' => 'Spesialis Mata'
            ],
            [
                'spesialis' => 'Psikologi Klinis'
            ],
            [
                'spesialis' => 'Spesialis Bedah'
            ],
            [
                'spesialis' => 'Spesialis Lainnya'
            ]
            ];
            foreach($spesialis as $sp) {
                spesialis::create($sp);
            }
    }
}
