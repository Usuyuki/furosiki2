<?php

declare(strict_types=1);

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
    public function run(): void
    {
        $param = [
            [
                'name' => "高麗納戸",
                'description' => "濃い緑",
                'bg_color' => "2c4f54",
                'stroke_color' => "fff",
            ],
            [
                'name' => "さくらいろ",
                'description' => "濃い緑",
                'bg_color' => "fef4f4",
                'stroke_color' => "fff",
            ],

        ];
        DB::table("color_parrots")->insert($param);
    }
}