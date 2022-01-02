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
                'name'=>"標準",
                'description'=>"標準",
            ],
            [
                'name'=>"お正月",
                'description'=>"お正月",
            ],
            [
                'name'=>"クリスマス",
                'description'=>"クリスマス",
            ],
        ];
        DB::table("appearances")->insert($param);
    }
}