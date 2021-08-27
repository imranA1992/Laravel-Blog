<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountriesController extends Controller
{
  public function index()
  {
    $Countries = Country::all();
    return view('countries.index', compact('Countries'));
  }

  public function create()
  {
    return view('countries.create');
  }

  public function store(Request $request)
  {
    $CountryData = new Country();
    $CountryData->name = $request->CountryName;
    $CountryData->save();
    return redirect('/countries');
  }

  public function show($id)
  {
    $CountryData = Country::findOrFail($id);
    return view('countries.show', compact('CountryData'));
  }

  public function edit($id)
  {
    $CountryData = Country::findOrFail($id);
    return view('countries.edit', compact('CountryData'));
  }

  public function update(Request $request, $id)
  {
    $CountryData = Country::findOrFail($id);
    $CountryData->name = $request->CountryName;
    $CountryData->save();
    return redirect('/countries');
  }

  public function destroy($id)
  {
    $CountryData = Country::findOrFail($id);
    $CountryData->delete();
    return redirect('/countries');
  }
}
