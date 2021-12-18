<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalerisRequest;
use App\Galeris;
use App\PaketTravels;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GalerisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Galeris::with(['paket_travels'])->get();

        return view('pages.admin.galeris.index', [
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
        $paket_travels = PaketTravels::all();
        return view ('pages.admin.galeris.create',[
            'paket_travels' => $paket_travels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalerisRequest $request)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/galeris', 'public'
        );

        Galeris::create($data);
        return redirect()->route('galeris.index');
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
        $item = Galeris::findOrFail($id);
        $paket_travels = PaketTravels::all();

        return view ('pages.admin.galeris.edit',[
            'item' => $item,
            'paket_travels' => $paket_travels
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalerisRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/galeris', 'public'
        );

        $item = Galeris::findOrFail($id);
        $item->update($data);
        return redirect()->route('galeris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Galeris::findOrFail($id);
        $item->delete();

        return redirect()->route('galeris.index');
    }
}
