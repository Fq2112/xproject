<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IcController extends Controller
{
    public function showLogicWar()
    {
        return view('xproject.ic.logicwar');
    }

    public function LogicWarRulebook()
    {
        return view('xproject.ic.logicwar_rulebook');
    }

    public function showLogicWarQuiz()
    {
        return view('xproject.ic.logicwar_quiz');
    }

    public function showITFest()
    {
        return view('xproject.ic.itfest');
    }

    public function ITFestRulebook()
    {
        return view('xproject.ic.itfest_rulebook');
    }
}
