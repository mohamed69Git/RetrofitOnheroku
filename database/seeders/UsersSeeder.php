<?php

namespace Database\Seeders;

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
        DB::table('users')->insert([
          'name'=>"mohamed",
          'email'=>"mohamed.nodye1@univ-thies.sn",
          'numero_dossier' =>"19030100350",
          'numero_tel' =>"707877550",
          'password'=>"12345678"
        ],[
            'name' => "mor",
            'email' => "mor.diaw1@univ-thies.sn",
            'numero_dossier' => "17045604567",
            'numero_tel' => "781879981",
            'password' => "12345678"
        ]);
    }
}
