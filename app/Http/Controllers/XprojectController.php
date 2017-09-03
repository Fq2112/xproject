<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

    public function showFormInput()
    {
        return view('auth.register');
    }

    public function showFormReview()
    {
        if(!Session::has('nama'))
            return redirect()->route('pendaftaran');

        return view('xproject.review');
    }

    public function showFormPembayaran()
    {
        return view('xproject.pembayaran');
    }

    public function showFormProses()
    {
        return view('xproject.proses');
    }

    public function showFormReport()
    {
        return view('xproject.hakakses');
    }
}
