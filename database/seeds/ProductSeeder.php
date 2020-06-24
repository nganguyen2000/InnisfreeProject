<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Son dưỡng Glow Tint Lip Balm',
                'price' => 320000,
                'oldPrice'=>400000,
                'image'=>'public/h1.jpg',
                'category_id'=>13,
            ],
            [
                'name'=>'Nước cân bằng Aloe Revital Skin Mist ',
                'price' => 260000,
                'oldPrice'=>300000,
                'image'=>'public/h2.jpg',
                'category_id'=>11,
            ],
            [
                'name'=>'Mặt nạ Capsule Recipe Pack Volcanic Cluster ',
                'price' => 260000,
                'oldPrice'=>300000,
                'image'=>'public/h3.jpg',
                'category_id'=>9,
            ],
            [
                'name'=>'Kem chống nắng Intensive Long Lasting Sunscreen ',
                'price' => 360000,
                'oldPrice'=>400000,
                'image'=>'public/h4.jpg',
                'category_id'=>12,
            ]

        ]);  
    }
}
