<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CitiesController extends Controller
{

    public function index()
    {
      $Cities = City::all();
      return view('cities.index', compact('Cities'));
    }

    public function create()
    {
      return view('cities.create');
    }

    public function store(Request $request)
    {
      $CityData = new City();
      $CityData->name = $request->CityName;
      $CityData->status = $request->CityStatus;
      $CityData->save();
      return redirect('/cities');
    }

    public function show($id)
    {
      $CityData = City::findOrFail($id);
      return view('cities.show', compact('CityData'));
    }

    public function edit($id)
    {
      $CityData = City::findOrFail($id);
      return view('cities.edit', compact('CityData'));
    }

    public function update(Request $request, $id)
    {
      $CityData = City::findOrFail($id);
      $CityData->name = $request->CityName;
      $CityData->status = $request->CityStatus;
      $CityData->save();
      return redirect('/cities');
    }

    public function destroy($id)
    {
      $CityData = City::findOrFail($id);
      $CityData->delete();
      return redirect('/cities');
    }
}
