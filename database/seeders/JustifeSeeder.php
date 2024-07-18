<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JustifeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('justives')->insert([
            [
                'Justif' => 'Non',
            ],
            [
                'Justif' => 'Certificat medicale',
            ],
            [
                'Justif' => 'Permis',
            ],
            [
                'Justif' => 'Convocation',
            ],
            [
                'Justif' => 'Concours',
            ],
            [
                'Justif' => 'Décès',
            ],
            [
                'Justif' => 'Autre',
            ],
        ]);
    }
}
