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
                'sentence'=>"テスト",
                'from'=>"うすゆき1",
                'to'=>"うすゆき2",
                'uuid'=>Str::uuid(),
                'is_tategaki'=>1,
                'is_receive'=>0,
                'data_path'=>"data/",
                'color'=>"fff",
                'appearance_id'=>1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'sentence'=>"テスト",
                'from'=>"うすゆき1",
                'to'=>"うすゆき2",
                'uuid'=>Str::uuid(),
                'is_tategaki'=>1,
                'is_receive'=>1,
                'data_path'=>"data/",
                'color'=>"fff",
                'appearance_id'=>1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table("furosikis")->insert($param);
    }
}