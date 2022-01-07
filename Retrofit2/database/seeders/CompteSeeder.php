<?php

namespace Database\Seeders;

use App\Models\Compte;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompteSeeder extends Seeder
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
            //     "nbr_ticket_cent" => 55,
            //     "nbr_ticket_fifty" => 67,
            //     "solde" => 5050,
            //     "user_id" => 1
            // ],
            // [
            //     "nbr_ticket_cent" => 23,
            //     "nbr_ticket_fifty" => 2,
            //     "solde" => 12000,
            //     "user_id" => 2
            // ]
            [
                "nbr_ticket_cent" => 23,
                "nbr_ticket_fifty" => 19,
                "solde" => 36000,
                "user_id" => 3
            ]
        ];
        Compte::insert($data);
    }
}
