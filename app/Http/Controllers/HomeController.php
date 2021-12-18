<?php

namespace App\Http\Controllers;

use App\PaketTravels;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = PaketTravels::with(['galeris'])->get();
        return view('pages.home', [
            'items' =>$items
        ]);
    }
}
