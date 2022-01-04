<?php

namespace App\Http\Controllers;

use App\Models\Furosiki;
use Illuminate\Http\Request;

class UketoruController extends Controller
{
    public function show(Request $request){
        $furosiki=Furosiki::where('uuid',$request->uuid)->first();
        return view('furosiki.uketoru.show',['furosiki'=>$furosiki]);
    }
    public function check(Request $request){
        return view('furosiki.uketoru.check');
    }
    public function uketotta(Request $request){
        //ダウンロードの実行と同時にフラグをオンにしてダウンロードできないようにする
        return view('furosiki.uketoru.uketotta');
    }
}