<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class FurosikiTableSeeder extends Seeder
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
                'from'=>"うすゆき1",
                'to'=>"うすゆき2",
                'sentence'=>"テスト",
                'uuid'=>Str::uuid(),
                'is_tategaki'=>1,
                'is_receive'=>0,
                'data_path'=>"data/",
                'bg_color'=>"fff",
                'stroke_color'=>"000",
                'appearance_id'=>1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'from'=>"うすゆき1",
                'to'=>"うすゆき2",
                'sentence'=>"テスト",
                'uuid'=>Str::uuid(),
                'is_tategaki'=>1,
                'is_receive'=>0,
                'data_path'=>"data/",
                'bg_color'=>"fff",
                'stroke_color'=>"000",
                'appearance_id'=>1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table("furosikis")->insert($param);
    }
}