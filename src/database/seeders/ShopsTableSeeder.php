<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'shop_img'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
            'shop_name' => '仙人',
            'city_id'=>2,
            'genre_id'=>2,
            'shop_overview'=>'料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。'
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            'shop_name' => '牛助',
            'city_id' => 3,
            'genre_id' => 3,
            'shop_overview'=>'焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。'
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
            'shop_name' => '戦慄',
            'city_id' => 4,
            'genre_id' => 4,
            'shop_overview'=>'気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。'
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
            'shop_name' => 'ルーク',
            'city_id'=>2,
            'genre_id'=>5,
            'shop_overview'=>'都心にひっそりとたたずむ、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。'
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
            'shop_name' => '志摩屋',
            'city_id' => 4,
            'genre_id' => 6,
            'shop_overview'=>'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系ともに揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。'
        ];
        DB::table('shops')->insert($param);
        $param = [
            'shop_img'=>'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
            'shop_name' => '香',
            'city_id' => 2,
            'genre_id' => 3,
            'shop_overview'=>'大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。'
        ];
        DB::table('shops')->insert($param);
    }
}
