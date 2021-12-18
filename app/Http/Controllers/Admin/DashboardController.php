<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PaketTravels;
use App\Transaksis;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard', [
            'paket_travels' => PaketTravels::count(),
            'transaksis' => Transaksis::count(),
            'transaksi_pending' => Transaksis::where('sukses_transaksi', 'PENDING')->count(),
            'transaksi_success' => Transaksis::where('sukses_transaksi', 'SUCCESS')->count()
        ]);
    }
}
//setelah ini bikin Route
