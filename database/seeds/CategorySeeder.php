<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'Mask',
            ],
            [
                'name'=>'Lotion',
            ],
            [
                'name'=>'Toner',
            ],
            [
                'name'=>'SunScreem',
            ],
            [
                'name'=>'Lipstick',
            ]

        ]);  
    }
}
