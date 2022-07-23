<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sellers')->factory()->create([
            'username' => 'mohok909',
            'password' => 'MOHOK909@',
            'name' => 'Mahadial Mohok Million',
            'email' => 'mahadialmohok3@gmail.com',
            'status' => 'active',
            'image' => '',
            'number' => '01767268796',
            
        ]);

        DB::table('sellers')->insert([
            'username' => 'Sufian9',
            'password' => 'Sufian9@',
            'name' => 'Sufina Hossain',
            'address' => 'Sufina3@gmail.com',
            'status' => 'active',
            'image' => '',
            'number' => '01760961796',
        ]);

        DB::table('sellers')->insert([
            'username' => 'Sumit10',
            'password' => 'Sumit10@',
            'name' => 'Sumit Hossain',
            'address' => 'Sumit10@gmail.com',
            'status' => 'active',
            'image' => '',
            'number' => '01960981796',
        ]);

        DB::table('sellers')->insert([
            'username' => 'Nadim099',
            'password' => 'Nadim099@',
            'name' => 'Nadim Hossain',
            'address' => 'Nadim099@gmail.com',
            'status' => 'active',
            'image' => '',
            'number' => '01960916596',
            
        ]);

        DB::table('sellers')->insert([
            'username' => 'Nayeem099',
            'password' => 'Nayeem099@',
            'name' => 'Nayeem Hossain',
            'address' => 'Nayeem099@gmail.com',
            'status' => 'inactive',
            'image' => '',
            'number' => '019609366596',
        ]);

        DB::table('sellers')->insert([
            'username' => 'Ratul143',
            'password' => 'Ratul143@',
            'name' => 'Ratul Hossain',
            'address' => 'Ratul143@gmail.com',
            'status' => 'active',
            'image' => '',
            'number' => '0136096596',
            
        ]);
    }
}