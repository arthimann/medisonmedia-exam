<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entities = [
            [
                'name' => 'Admin',
                'email' => 'admin@medisonmedia.com',
                'password' => bcrypt('Aa102030'),
            ]
        ];

        DB::table('users')->insert($entities);
    }
}
