<?php

namespace Database\Seeders;

use App\Models\OurClient;
use Illuminate\Database\Seeder;

class OurClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // our client data
        $data = [
            // client 1
            [
                'name' => 'Client 1',
                'company_name' => 'Company 1',
                'love_point' => 5,
                'detail' => 'Client number 1 detail info.',
                'logo_path' => 'images/our_clients/client.png',
                'favorite_logo_path' => 'images/our_clients/favorite_client.png',
            ],
            
            // client 2
            [
                'name' => 'Client 2',
                'company_name' => 'Company 2',
                'love_point' => 2,
                'detail' => 'Client number 2 detail info including additional info.',
                'logo_path' => 'images/our_clients/client.png',
                'favorite_logo_path' => 'images/our_clients/favorite_client.png',
            ],
            
            // client 3
            [
                'name' => 'Client 3',
                'company_name' => 'Company 3',
                'love_point' => 9,
                'detail' => 'Client number 3 detail info...',
                'logo_path' => 'images/our_clients/client.png',
                'favorite_logo_path' => 'images/our_clients/favorite_client.png',
            ],

            // client 4
            [
                'name' => 'Client 4',
                'company_name' => 'Company 4',
                'love_point' => 10,
                'detail' => 'Client number 4 detail info...',
                'logo_path' => 'images/our_clients/client.png',
                'favorite_logo_path' => 'images/our_clients/favorite_client.png',
            ],

            // client 5
            [
                'name' => 'Client 5',
                'company_name' => 'Company 5',
                'love_point' => 5,
                'detail' => 'Client number 5 detail info...',
                'logo_path' => 'images/our_clients/client.png',
                'favorite_logo_path' => 'images/our_clients/favorite_client.png',
            ],

        ];

        // seed data into database
        foreach($data as $dataRow) {
            OurClient::create($dataRow);
        }
    }
}
