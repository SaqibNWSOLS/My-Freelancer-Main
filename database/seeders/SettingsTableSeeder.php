<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            ['id' => 1, 'feature' => 'email_verifcation', 'value' => 'Active', 'created_at' => '2024-06-28 12:57:14', 'updated_at' => '2024-06-28 09:06:13'],
            ['id' => 2, 'feature' => 'phone_verifcation', 'value' => 'Active', 'created_at' => '2024-06-28 12:57:14', 'updated_at' => '2024-06-28 09:07:25'],
            ['id' => 3, 'feature' => 'screen_verifcation', 'value' => 'In-Active', 'created_at' => '2024-06-28 12:57:14', 'updated_at' => '2024-06-28 08:20:50'],
        ]);
    }
}

