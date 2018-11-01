<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;

class BandsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bands = Band::paginate(5);

        return view('bands.index', compact('bands'));
    }
}
