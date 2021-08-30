<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StatesController extends Controller
{
    public function index()
    {
        $States = State::all();
        return view('states.index', compact('States'));
    }

    public function create()
    {
      return view('states.create');
    }

    public function store(Request $request)
    {
      $StateData = new State();
      $StateData->name = $request->StateName;
      $StateData->status = $request->StateStatus;
      $StateData->save();
      return redirect('/states');
    }

    public function show($id)
    {
      $StateData = State::findOrFail($id);
      return view('states.show', compact('StateData'));
    }

    public function edit($id)
    {
      $StateData = State::findOrFail($id);
      return view('states.edit', compact('StateData'));
    }

    public function update(Request $request, $id)
    {
      $StateData = State::findOrFail($id);
      $StateData->name = $request->StateName;
      $StateData->status = $request->StateStatus;
      $StateData->save();
      return redirect('/states');
    }

    public function destroy($id)
    {
      $StateData = State::findOrFail($id);
      $StateData->delete();
      return redirect('/states');
    }
}
