<?php

use App\Client;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = [
            'name'              => 'Facebook',
            'email'             => 'facebook@fb.com',
            'phone'             =>  '90805432169',
            'status'            =>  '1',
            'address'           =>  '2 Facebook driveway, Silicon Valley US.',
            'expiry_date'           =>  '2021-05-28',
            'date_of_engagement'    =>  '2020-05-2',
        ];

        Client::insert($client);
    }
}

