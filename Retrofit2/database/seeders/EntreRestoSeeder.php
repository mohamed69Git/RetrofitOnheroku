<?php

namespace Database\Seeders;

use App\Models\EntreResto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EntreRestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
            $data = [

            // [
            //     "compte_id" => 3,
            //     "created_at" => "2021-12-13 13:16:07",
            //      "type_repa_id" => 2
            // ],
            // [
            //     "compte_id" => 3,
            //     "created_at" => "2021-12-13 13:17:16",
            //      "type_repa_id" => 2
            // ],
            // [
            //     "compte_id" => 3,
            //     "created_at" => "2021-12-13 13:27:29",
            //      "type_repa_id" => 2
            // ],
            // [
            //     "compte_id" => 4,
            //     "created_at" => "2021-12-13 14:16:08",
            //      "type_repa_id" => 1
            // ],
            // [
            //     "compte_id" => 4,
            //     "created_at" => "2021-12-13 14:16:12",
            //      "type_repa_id" => 1
            // ],
            // [
            //     "compte_id" => 4,
            //     "created_at" => "2021-12-13 14:16:32",
            //      "type_repa_id" => 2
            // ],
            // [
            //     "compte_id" => 4,
            //     "created_at" => "2021-12-13 14:16:32",
            //      "type_repa_id" => 1
            // ],
            // [
            //     "compte_id" => 4,
            //     "created_at" => "2021-12-13 14:16:39",
            //      "type_repa_id" => 3
            // ],
            // [
            //     "compte_id" => 4,
            //     "created_at" => "2021-12-27 16:13:45",
            //      "type_repa_id" => 2
            // ]
            [
                "compte_id" => 5,
                "created_at" => "2021-12-13 14:16:32",
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 5,
                "created_at" => "2021-12-13 14:16:32",
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 5,
                "created_at" => "2021-12-13 14:16:39",
                "type_repa_id" => 3
            ],
            [
                "compte_id" => 5,
                "created_at" => "2021-12-27 16:13:45",
                "type_repa_id" => 2
            ]
            ];

        EntreResto::insert($data);
       
    }
}
