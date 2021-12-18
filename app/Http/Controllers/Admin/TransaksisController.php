<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransaksisRequest;
use App\Transaksis;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class TransaksisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Transaksis::with([
            'details', 'paket_travels', 'user'
        ])->get();

        return view('pages.admin.transaksis.index', [
            'items' =>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaksisRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Transaksis::create($data);
        return redirect()->route('transaksis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Transaksis::with([
            'details', 'paket_travels', 'user'
        ])->findOrFail($id);

        return view ('pages.admin.transaksis.detail',[
            'item' => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Transaksis::findOrFail($id);

        return view ('pages.admin.transaksis.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TransaksisRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Transaksis::findOrFail($id);
        $item->update($data);
        return redirect()->route('transaksis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Transaksis::findOrFail($id);
        $item->delete();

        return redirect()->route('transaksis.index');
    }

    public function cetak()
    {

        $items = Transaksis::all();
        $pdf   = PDF::loadview('pages.admin.transaksis.cetak', ['items' => $items]);
        return $pdf->stream();
        // return $pdf->download('laporan-post.pdf');
    }

}
