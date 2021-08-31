<?php

namespace App\Http\Controllers;

use App\Continent;
use Illuminate\Http\Request;

class ContinentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Continents = Continent::all();
      return view('continents.index', compact('Continents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('continents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ValidateData = $request->validate([
          'name' => 'required|max:50',
        ]);
        Continent::create($request->all());
        return redirect()->route('continents.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function show(Continent $continent)
    {
      return view('continents.show', compact('continent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function edit(Continent $continent)
    {
        return view('continents.edit', compact('continent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Continent $continent)
    {
        $ValidateData = $request->validate([
          'name' => 'required|max:50',
        ]);
        $continent->update($request->all());
        return redirect()->route('continents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Continent  $continent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Continent $continent)
    {
        $continent->delete();
        return redirect()->route('continents.index');
    }
}
