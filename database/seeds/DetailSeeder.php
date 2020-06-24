<?php

use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            [
                'product_id'=> 1,
                'quantity'=> 56,
                'capacity'=>3,
                'origin'=>'Korean',
                'content'=>'Son dưỡng môi innisfree Glow Tint Lip Balm giúp nuôi dưỡng sâu và tạo màu tự nhiên cho môi, đồng thời mang lại độ bóng rạng rỡ và tràn đầy sức sống',
            ],
            [
                'product_id'=> 2,
                'quantity'=> 67,
                'capacity'=>120,
                'origin'=>'Korean',
                'content'=>'Dòng sản phẩm dưỡng ẩm và phục hồi sức sống cho da khi bị tổn thương cháy nắng từ nha đam hữu cơ Jeju',
            ],
            [
                'product_id'=> 3,
                'quantity'=> 47,
                'capacity'=>10,
                'origin'=>'Korean',
                'content'=>'Mặt nạ massage giúp giải quyết các vấn đề về da với thành phần tự nhiên. Tiện lợi, dễ sử dụng, có thể mang đi mọi lúc mọi nơi', 
            ],
            [
                'product_id'=> 4,
                'quantity'=> 44,
                'capacity'=>120,
                'origin'=>'Korean',
                'content'=>'Chiết xuất từ dầu hoa hướng dương và trà xanh đảo Jeju chăm sóc làn da dễ bị tổn thương do tia tử ngoại trở nên khỏe mạnh',

            ]
        ]);
    }
}
