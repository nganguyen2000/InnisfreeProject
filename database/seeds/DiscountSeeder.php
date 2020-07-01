<?php

use Illuminate\Database\Seeder;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
            [
                'percent'=>50,
                'code' => 'NGACUTE',
            ],
            [
                'percent'=>40,
                'code' => 'NGA',
            ]

        ]);  
    }
}
