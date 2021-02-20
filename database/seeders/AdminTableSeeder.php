<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        $admin = [
            'name'      => 'admin',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('adminadmin'),
            'phone'     => '+380665647364'
        ];

        DB::table('users')->insert($admin);
    }
}
