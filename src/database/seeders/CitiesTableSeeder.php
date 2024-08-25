<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'city' => 'All city'
        ];
        DB::table('cities')->insert($param);
        $param = [
            'city' => '東京都'
        ];
        DB::table('cities')->insert($param);
        $param = [
            'city' => '大阪府'
        ];
        DB::table('cities')->insert($param);
        $param = [
            'city' => '福岡県'
        ];
        DB::table('cities')->insert($param);
    }
}
