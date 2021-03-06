<?php

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
        DB::table('users')->insert([
            [
                'username'=>'admin',
                'name' => 'Nga Nguyen',
                'email'=>'admin@123',
                'role'=>'admin',
                'password'=>'$2y$10$DIwlXOs.W.2R0gaOPrLghuZ5SU3V5GWoe3wsk5TGbElX.sJTI42Ty',
                'money'=>0,
            ],
            [
                'username'=>'user',
                'name' => 'Dai Tran',
                'email'=>'user@123',
                'role'=>'user',
                'password'=>'123',
                'money'=>1000000,
            ]

        ]);  
       
    }
}


