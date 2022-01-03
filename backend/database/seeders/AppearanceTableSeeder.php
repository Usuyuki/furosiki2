<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AppearanceTableSeeder extends Seeder
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
                'name'=>"唐草",
                'description'=>"標準",
                'pattern_svg_path'=>"svg/",
                'default_bg_color'=>"fff",
                'default_stroke_color'=>"000",
            ],
            [
                'name'=>"クリスマス",
                'description'=>"クリスマス",
                'pattern_svg_path'=>"svg/",
                'default_bg_color'=>"fff",
                'default_stroke_color'=>"000",
            ],
        ];
        DB::table("appearances")->insert($param);
    }
}