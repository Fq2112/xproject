<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CiController extends Controller
{
    public function showWDC()
    {
        return view('xproject.ci.wdc');
    }

    public function WDCRulebook()
    {
        return view('xproject.ci.wdc_rulebook');
    }

    public function showIPC()
    {
        return view('xproject.ci.ipc');
    }

    public function IPCRulebook()
    {
        return view('xproject.ci.ipc_rulebook');
    }
}
