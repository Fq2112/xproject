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
        return view('xproject.ic.ic');
    }
    public function showCI()
    {
        return view('xproject.ci.ci');
    }
    public function showIFC()
    {
        return view('xproject.ifc.ifc');
    }
}
