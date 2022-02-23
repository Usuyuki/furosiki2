<?php

declare(strict_types=1);

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WakaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $param = [];
        /**
         * https://api.aoikujira.com/index.php?hyakunin&show
         * クジラAPIを使用しています、
         */
        $response_body = simplexml_load_file("https://api.aoikujira.com/hyakunin/get2.php");
        foreach ($response_body as $waka) {
            $param[] = [
                'kami' => $waka->simo,
                'simo' =>  $waka->simo,
                'author' =>  $waka->sakusya,
            ];
        }

        DB::table("wakas")->insert($param);
    }
}