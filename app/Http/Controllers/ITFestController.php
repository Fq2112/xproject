<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ITFestController extends Controller
{

    public function animasi(Request $request)
    {
        $this->validate($request, [
            'urlyoutube' => 'required|url',
            'urlproject' => 'required|url'
        ]);

        $lomba = $request->user()->lomba()->first()->id;

        $request->user()->lomba()->updateExistingPivot($lomba, [
            'url_youtube' => $request->urlyoutube,
            'url_project' => $request->urlproject
        ]);

        return redirect()->route('home');
    }

    public function game(Request $request)
    {
        $this->validate($request, [
            'urlyoutube' => 'required|url',
            'urlproject' => 'required|url'
        ]);

        $lomba = $request->user()->lomba()->first()->id;

        $request->user()->lomba()->updateExistingPivot($lomba, [
            'url_youtube' => $request->urlyoutube,
            'url_project' => $request->urlproject
        ]);

        return redirect()->route('home');
    }

    public function bisnis(Request $request)
    {
        $this->validate($request, [
            'urlyoutube' => 'required|url',
            'urlproject' => 'required|url',
            'urlproposal' => 'required|url'
        ]);

        $lomba = $request->user()->lomba()->first()->id;

        $request->user()->lomba()->updateExistingPivot($lomba, [
            'url_youtube' => $request->urlyoutube,
            'url_project' => $request->urlproject,
            'url_proposal' => $request->urlproposal
        ]);

        return redirect()->route('home');
    }

    public function desainweb(Request $request)
    {
        $this->validate($request, [
            'urlproject' => 'required|url'
        ]);

        $lomba = $request->user()->lomba()->first()->id;

        $request->user()->lomba()->updateExistingPivot($lomba, [
            'url_project' => $request->urlproject
        ]);

        return redirect()->route('home');
    }

}
