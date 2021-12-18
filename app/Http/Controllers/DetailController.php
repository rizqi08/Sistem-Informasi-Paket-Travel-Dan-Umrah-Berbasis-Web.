<?php

namespace App\Http\Controllers;

use App\PaketTravels;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = PaketTravels::with(['galeris'])
                            ->where('slug', $slug)
                            ->firstOrFail();
        return view('pages.detail',[
            'item'=>$item
        ]);
    }
}
