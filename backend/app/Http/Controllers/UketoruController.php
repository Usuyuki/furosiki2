<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Furosiki;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Redirector;
use Illuminate\Http\RedirectResponse;

class UketoruController extends Controller
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View|Factory
     */
    public function show(Request $request): View|Factory
    {
        $furosiki = Furosiki::where('uuid', $request->uuid)->first();
        return view('furosiki.uketoru.show', ['furosiki' => $furosiki]);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View|Factory
     */
    public function check(Request $request): View|Factory
    {
        return view('furosiki.uketoru.check', []);
    }

    /**
     * Undocumented function
     *
     * @param Request $request
     * @return View|Factory
     */
    public function uketotta(Request $request): View|Factory
    {
        //ダウンロードの実行と同時にフラグをオンにしてダウンロードできないようにする
        return view('furosiki.uketoru.uketotta', []);
    }
}