<?php

namespace Database\Seeders;

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
        DB::table('comptes')->insert(
            [
                "nbr_ticket_cent" => 55,
                "nbr_ticket_fifty" => 67,
                "solde" => 5050,
                "user_id" => 1
            ],
            [
                "nbr_ticket_cent" => 23,
                "nbr_ticket_fifty" => -2,
                "solde" => 12000,
                "user_id" => 2
            ]
        );
    }
}
