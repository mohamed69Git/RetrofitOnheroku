<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
            //     'name' => "mohamed",
            //     'email' => "mohamed.nodye1@univ-thies.sn",
            //     'numero_dossier' => "19030100350",
            //     'numero_tel' => "707877550",
            //     'password' => "12345678"
            // ],
            // [
            //     'name' => "mor",
            //     'email' => "mor.diaw1@univ-thies.sn",
            //     'numero_dossier' => "17045604567",
            //     'numero_tel' => "781879981",
            //     'password' => "12345678"
            // ]
            [
                'name' => "Amath",
                'email' => "amath.sarr1@univ-thies.sn",
                'numero_dossier' => "33333333333",
                'numero_tel' => "772983628",
                'password' => "12345678"
            ]
        ];
        User::insert($data);
    }
}
