<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DataPelanggansRequest;
use App\DataPelanggans;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PDF;

class DataPelanggansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Datapelanggans::with([
            'details'
        ])->get();

        return view('pages.admin.datapelanggans.index', [
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
        return view ('pages.datadiri');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DataPelanggansRequest $request)
    {
        $data = $request->all();
        

        DataPelanggans::create($data);
        return redirect()->route('datapelanggans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = DataPelanggans::findOrFail($id);

        return view ('pages.admin.datapelanggans.edit',[
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
    public function update(DataPelanggansRequest $request, $id)
    {
        $data = $request->all();
        

        $item = DataPelanggans::findOrFail($id);
        $item->update($data);
        return redirect()->route('datapelanggans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = DataPelanggans::findOrFail($id);
        $item->delete();

        return redirect()->route('datapelanggans.index');
    }

    public function cetak()
    {

        $items = DataPelanggans::all();
        $pdf   = PDF::loadview('pages.admin.datapelanggans.cetak', ['items' => $items]);
        return $pdf->stream();
        // return $pdf->download('laporan-post.pdf');
    }
}
