<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevelopmentController extends Controller
{
    public function index(Request $request)
    {

        dd(app());


        $ssp = resolve('SSPEcommerce');

        $ssp->setName('ok ela kiri');

        return view('dashboard');
    }
}
