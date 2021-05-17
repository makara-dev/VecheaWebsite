<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user data
        $data = [
            // admin
            [
                'id' => 1,
                'name' => 'Admin',
                'role' => 0,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
            ],

        ];

        // seed data into database
        foreach($data as $dataRow) {
            User::create($dataRow);
        }
    }
}
