<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
            'name' => 'AnissaKHODJA',
            'email' => 'admin1@gmail.com',
            'password' => '$2y$10$LBdOfzZGjqkSFETUpNPoKO0ilgLSrz4DTtqj92/n0ONuxamSViVYe',
        ]);
        \App\Models\Admin::create([
            'name' => 'AleynaOZTURK',
            'email' => 'admin2@gmail.com',
            'password' => '$2y$10$cEEvbk8.oNc4cbinhJ2xb.CYApFy5wOSDrUPKkTf4braTSzhaWTSa',
        ]);
        \App\Models\Admin::create([
            'name' => 'LindaMENDY',
            'email' => 'admin3@gmail.com',
            'password' => '$2y$10$J6u3z5slHmbPkUHl0Mz.xei/fuYFWOFxqQ.XiiWMFc8VkDEIpChsy',
        ]);
        \App\Models\Admin::create([
            'name' => 'LeoMARCHAL',
            'email' => 'admin4@gmail.com',
            'password' => '$2y$10$CmdgnERlTxl7JiVEErSw5OFTI2oRPMw1ZUlThZ5/K6NPkfwaHTGwq',
        ]);
    }
}
