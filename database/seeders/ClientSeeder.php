<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create([
        	'firstName' => 'Cliente 01', 
        	'lastName'  => 'Apellido 01',
        	'address'   => 'Dirección 01'
        ]);
        Client::create([
        	'firstName' => 'Cliente 02', 
        	'lastName'  => 'Apellido 02',
        	'address'   => 'Dirección 02'
        ]);
    }
}