<?php

namespace Database\Seeders;

use App\Models\Airbase;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AirbaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Airbase::create([
            'kode_lanud' => 'HLP',
            'name' => 'Halim Pedanakusuma',
            'locate' => 'Jakarta',
            'description' => 'Pangkalan Tailwindcss Express',
        ]);
    }
}
