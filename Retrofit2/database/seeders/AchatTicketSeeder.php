<?php

namespace Database\Seeders;

use App\Models\AchatTicket;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchatTicketSeeder extends Seeder
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
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:23:51",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:23:54",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:23:55",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:23:55",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:24:52",
                "quantite" => 1,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:26:58",
                "quantite" => 6,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:41:54",
                "quantite" => 4,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:45:50",
                "quantite" => 2,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:46:10",
                "quantite" => 2,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:46:18",
                "quantite" => 2,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:48:14",
                "quantite" => 2,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 00:49:03",
                "quantite" => 2,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 01:03:19",
                "quantite" => 2,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 01:08:11",
                "quantite" => 1,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 01:08:52",
                "quantite" => 12,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 01:15:44",
                "quantite" => 29,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 3,
                "created_at" => "2021-12-25 01:20:08",
                "quantite" => 25,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 02:39:07",
                "quantite" => 4,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 02:57:45",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 3,
                "created_at" => "2021-12-25 03:23:59",
                "quantite" => 100,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 03:24:10",
                "quantite" => 9,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 03:24:21",
                "quantite" => 50,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 3,
                "created_at" => "2021-12-25 03:24:31",
                "quantite" => 17,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 03:25:08",
                "quantite" => 1,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 03:25:19",
                "quantite" => 1,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 03:33:53",
                "quantite" => 10,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 13:44:55",
                "quantite" => 1,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 13:45:01",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 13:45:17",
                "quantite" => 1,
                "type_repa_id" => 2
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 13:45:27",
                "quantite" => 10,
                "type_repa_id" => 1
            ],
            [
                "compte_id" => 4,
                "created_at" => "2021-12-25 13:53:42",
                "quantite" => 25,
                "type_repa_id" => 1
            ]
        ];
        AchatTicket::insert($data);
    }
}
