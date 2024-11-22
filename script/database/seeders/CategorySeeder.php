<?php

 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


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
                'name' => 'Bangla',
                'icon' => 'empty',
                'slug' =>'bangla',
                'status' => '1'
            ],
            [
                'name' => 'News',
                'icon' => 'empty',
                'slug' =>'news',
                'status' => '1'
            ],

            [
                'name' => 'Indian',
                'icon' => 'empty',
                'slug' =>'indian',
                'status' => '1'
            ],
            [
                'name' => 'Sports',
                'icon' => 'empty',
                'slug' =>'sports',
                'status' => '1'
            ]
        ]);
    }
}
