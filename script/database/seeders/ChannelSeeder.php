<?php

 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;


class ChannelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([
            [
                'name' => 'Peach TV',
                'logo'=>'frontend/img/peachtv.png',
                'slug' =>'https://dzkyvlfyge.erbvr.com/PeaceTvBangla/tracks-v3a1/mono.m3u8',
                'status' => '1',
                'category_id'=>1
            ]
           
        ]);
    }
}
