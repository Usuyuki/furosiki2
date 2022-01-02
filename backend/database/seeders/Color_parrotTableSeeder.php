<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Color_parrotTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            [
                'name'=>"高麗納戸",
                'description'=>"濃い緑",
                'color_hex'=>"2c4f54",
            ],
            [
                'name'=>"さくらいろ",
                'description'=>"濃い緑",
                'color_hex'=>"fef4f4",
            ],

        ];
        DB::table("color_parrots")->insert($param);
    }
}