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
}
