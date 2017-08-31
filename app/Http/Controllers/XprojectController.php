<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XprojectController extends Controller
{
    public function index()
    {
       return view('xproject.beranda');
    }

    public function showIC()
    {
        return view('xproject.ic');
    }
    public function showLogicWar()
    {
        return view('xproject.logicwar');
    }
    public function showITFest()
    {
        return view('xproject.itfest');
    }

    public function showCI()
    {
        return view('xproject.ci');
    }
    public function showWDC()
    {
        return view('xproject.wdc');
    }
    public function showIPC()
    {
        return view('xproject.ipc');
    }

    public function showIFC()
    {
        return view('xproject.ifc');
    }

}
