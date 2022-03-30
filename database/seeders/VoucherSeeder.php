<?php

namespace Database\Seeders;

use App\Models\Voucher;
use Illuminate\Database\Seeder;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Voucher::create([
        	'quantity'       => 5000, 
        	'expirationDate' => '2022-05-31',
        	'client_id'      => 1
        ]);
        Voucher::create([
        	'quantity'       => 2000, 
        	'expirationDate' => '2022-02-27',
        	'client_id'      => 1
        ]);
        Voucher::create([
        	'quantity'       => 3000, 
        	'expirationDate' => '2022-04-30',
        	'client_id'      => 2
        ]);
        Voucher::create([
        	'quantity'       => 7000, 
        	'expirationDate' => '2022-06-30',
        	'client_id'      => 1
        ]);
    }
}
