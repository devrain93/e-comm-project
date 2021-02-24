<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'name' => 'LG Smart Phone',
            'price' => '200',
            'description' => 'A Smart Phone with RAM 4 GB and much more',
            'category' => 'Smart Phone',
            'gallery' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_07-1100-V3.jpg',
        ]);
    }
}
