<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Teh Manis',
            'price' => 10000,
            'image_link' => '/upload/images/a.jpg',
            'description' => 'Teh yang rasanya manis',
            'category_id' => 2,
            'status' => 'public'
        ]);
        DB::table('products')->insert([
            'name' => 'kopi aja',
            'price' => 55555,
            'image_link' => 'picture',
            'description' => 'kopi pakai gula',
            'category_id' => 2,
            'status' => 'public'
        ]);
        DB::table('products')->insert([
            'name' => 'Nasi Putih',
            'price' => 3000,
            'image_link' => 'picture',
            'description' => 'nasi yang berwarna putih ',
            'category_id' => 1,
            'status' => 'public'
        ]);
    }
}
