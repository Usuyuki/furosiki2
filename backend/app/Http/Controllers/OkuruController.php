<?php

namespace App\Http\Controllers;

use App\Models\Furosiki;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OkuruController extends Controller
{

    public function create(Request $request){

        // バリデーション
        $this->validate($request,Furosiki::$rules);

        //中身作成
        $form=[
            "sentence"=>$request->sentence,
            "from"=>$request->from,
            "to"=>$request->to,
            "uuid"=>Str::uuid(),
            "is_tategaki"=>$request->is_tategaki,
            "is_receive"=>$request->is_receive,
            "data_path"=>$request->data_path,
            "color"=>$request->color,
            "appearance_id"=>$request->appearance_id,
        ];

        Furosiki::create($form);

        return redirect('okutta');
    }

}