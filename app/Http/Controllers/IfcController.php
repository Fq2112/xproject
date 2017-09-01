<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IfcController extends Controller
{
    public function IFCRulebook()
    {
        return view('xproject.ifc.ifc_rulebook');
    }
}
