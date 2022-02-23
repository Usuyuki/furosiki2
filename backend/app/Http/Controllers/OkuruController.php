<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Furosiki;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class OkuruController extends Controller
{
    /**
     * Undocumented function
     *
     * @return View|Factory
     */
    public function showForm(): View|Factory
    {
        return view('furosiki.okuru.form');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View|Factory
     */
    public function check(Request $request): View|Factory
    {
        return view('furosiki.okuru.check');
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return Redirector|RedirectResponse
     */
    public function create(Request $request): Redirector|RedirectResponse
    {

        // バリデーション
        $this->validate($request, Furosiki::$rules);

        //中身作成
        $form = [
            "sentence" => $request->sentence,
            "from" => $request->from,
            "to" => $request->to,
            "uuid" => Str::uuid(),
            "is_tategaki" => $request->is_tategaki,
            "is_receive" => $request->is_receive,
            "data_path" => $request->data_path,
            "color" => $request->color,
            "appearance_id" => $request->appearance_id,
        ];

        Furosiki::create($form);

        return redirect('okutta');
    }

    /**
     * Undocumented function
     *
     * @return View|Factory
     */
    public function done(): View|Factory
    {
        return view('furosiki.okuru.okutta');
    }
}