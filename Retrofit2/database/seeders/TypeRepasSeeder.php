<?php

namespace Database\Seeders;

use App\Models\TypeRepas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeRepasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nom' => 'repas_cent',
                'prix' => 100,
                'contexte' => 'repas'
            ],
            [
                'nom' => 'repas_fifty',
                'prix' => 50,
                'contexte' => 'petit déjeuner'
            ], [
                'nom' => 'repas_centn',
                'prix' => 50,
                'contexte' => 'dîner'
            ]
        ];

        TypeRepas::insert($data);
    }
}
