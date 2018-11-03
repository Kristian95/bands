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
    public function index(Request $request)
    {
        $bands = Band::select(['id', 'name', 'description', 'location', 'date']);

        if ($date = $request->input('date')) {
            $bands->where('date', $date);
        }

        if ($order = $request->input('nameOrder')) {
            $bands->orderBy('name', $order);
        }

        $bands = $bands->paginate(5);

        return view('bands.index', compact('bands'));
    }
}
