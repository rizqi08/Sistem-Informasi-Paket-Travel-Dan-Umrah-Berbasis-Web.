<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\TransaksiSukses;

use App\PaketTravels;
use App\Transaksis;
use App\TransaksiDetails;

use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    public function index(Request $request, $id)
    {
        $item = Transaksis::with(['details','paket_travels','user'])->findOrFail($id);

        return view('pages.checkout',[
            'item' => $item
        ]);
    }

    public function proses(Request $request, $id)
    {
        $paket_travels = PaketTravels::findOrFail($id);

        $transaksis = Transaksis::create([
            'paket_travels_id' => $id,
            'users_id' => Auth::user()->id,
            'tambah_visa' => 0,
            'total_transaksi' => $paket_travels->harga,
            'sukses_transaksi' => 'IN_CART'
        ]);

        TransaksiDetails::create([
            'transaksis_id' => $transaksis->id,
            'username' => Auth::user()->username,
            'kebangsaan' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(5)
        ]);

        return redirect()->route('checkout', $transaksis->id);
    }

    public function remove(Request $request, $detail_id)
    {
        $item = TransaksiDetails::findOrFail($detail_id);

        $transaksis = Transaksis::with(['details','paket_travels'])
                    ->findOrFail($item->transaksis_id);

        if($item->is_visa)
        {
            $transaksis->total_transaksi -= 1100000;
            $transaksis->tambah_visa -= 1100000;
        }

        $transaksis->total_transaksi -= $transaksis->paket_travels->harga;
        $transaksis->save();
        $item->delete();

        return redirect()->route('checkout', $item->transaksis_id);
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transaksis_id'] = $id;

        TransaksiDetails::create($data);

        $transaksis = Transaksis::with(['paket_travels'])->find($id);

        if($request->is_visa)
        {
            $transaksis->total_transaksi += 1100000;
            $transaksis->tambah_visa += 1100000;
        }

        $transaksis->total_transaksi += $transaksis->paket_travels->harga;
        $transaksis->save();

        return redirect()->route('checkout', $id);
    }

    public function success(Request $request, $id)
    {
        $transaksis = Transaksis::with(['details', 'paket_travels.galeris', 
        'user'])->findOrFail($id);
        $transaksis->sukses_transaksi = 'PENDING';

        $transaksis->save();

        // return redirect()->to('https://app.sandbox.midtrans.com/payment-links/1628859745941');
        //return $transaksis;
        //Kirim Email ke user etiketnya
        Mail::to($transaksis->user)->send(
            new TransaksiSukses($transaksis)
        );
        return view('pages.success');
    }
}
