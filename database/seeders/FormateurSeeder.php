<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FormateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formateurs')->insert([
            [
                'Formateur' => 'Samir Elachouri',
            ],
            [
                'Formateur' => 'Sanaa Chenaf',
            ],
            [
                'Formateur' => 'Jabran Daiif',
            ],
            [
                'Formateur' => 'Yassine Raghibi',
            ],
        ]);

    }
}
