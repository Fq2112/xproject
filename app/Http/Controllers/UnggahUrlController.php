<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UnggahUrlController extends Controller
{

    public function animasi()
    {
        if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
            return view('unggah.url.animasi');

        return redirect()->route('home');
    }

    public function desainweb()
    {
        if(is_null(Auth::user()->lomba()->first()->pivot->url_project))
            return view('unggah.url.desainweb');

        return redirect()->route('home');
    }

    public function game()
    {
        if(is_null(Auth::user()->lomba()->first()->pivot->url_project))
            return view('unggah.url.game');

        return redirect()->route('home');
    }

    public function bisnis()
    {
        if(is_null(Auth::user()->lomba()->first()->pivot->url_youtube))
            return view('unggah.url.bisnis');

        return redirect()->route('home');
    }

}
