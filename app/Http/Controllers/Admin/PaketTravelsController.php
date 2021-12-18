<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PaketTravelsRequest;
use App\PaketTravels;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaketTravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = PaketTravels::all();

        return view('pages.admin.paket-travels.index', [
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
        return view ('pages.admin.paket-travels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PaketTravelsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        PaketTravels::create($data);
        return redirect()->route('paket-travels.index');
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
        $item = PaketTravels::findOrFail($id);

        return view ('pages.admin.paket-travels.edit',[
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
    public function update(PaketTravelsRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = PaketTravels::findOrFail($id);
        $item->update($data);
        return redirect()->route('paket-travels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = PaketTravels::findOrFail($id);
        $item->delete();

        return redirect()->route('paket-travels.index');
    }
}
