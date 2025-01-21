<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('settings')->insert([
            [
                'site_name' => 'Bangla',
                'headline' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ',
                'logo' => 'None'
            ],
        ]);
    }
}
