<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Village;
use Session;

class VillagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villages = Village::all();
        return view('villages.index')->with('villages', $villages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('villages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Village::create($request->all());
        Session::flash("notice", "Desa / Kelurahan Berhasil ditambahkan.");
        return redirect()->route("villages.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $village = Village::find($id);
        return view('villages.show')->with('village', $village);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $village = Village::find($id);
        return view('villages.edit')->with('village', $village);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Village::find($id)->update($request->all());
        Session::flash("notice", "Desa / Kelurahan terpilih berhasil diubah.");
        return redirect()->route("villages.show", $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Village::destroy($id);
        Session::flash("notice", "Desa / Kelurahan terpilih berhasil dihapus.");
        return view('villages.index');
    }
}
