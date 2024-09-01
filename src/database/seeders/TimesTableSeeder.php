<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'reservation_time' => '00:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '00:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '01:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '01:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '12:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '12:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '13:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '13:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '17:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '27:30',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '21:00',
        ];
        DB::table('times')->insert($param);
        $param = [
            'reservation_time' => '21:30',
        ];
        DB::table('times')->insert($param);
    }
}
