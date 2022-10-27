<?php

namespace App\Http\Controllers;

use App\Http\Requests\StatesStoreRequest;
use App\Http\Requests\StatesUpdateRequest;
use App\Models\Country;
use App\Models\state;
use Illuminate\Http\Request;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = "All States";
        $states = state::get();

        if ($request->has('search')) {
            /* dd($request->search); */
            $states = state::where('name', 'like', "%{$request->search}%")->get();
        }

        return view('states.index')->with(['title' => $title, 'states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Create state";
        $countries = Country::get();
        return view('states.create')->with(['title' => $title, 'countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StatesStoreRequest $request)
    {
        state::create([
            'country_id' => $request->country_id,
            'name' => $request->name,
        ]);
        return redirect()->route('states.index')->with(['message' => 'State created successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\state  $state
     * @return \Illuminate\Http\Response
     */
    public function show(state $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\state  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(state $state)
    {
        $countries = Country::get();
        $title = "View state";
        return view('states.edit')->with(['state' => $state, 'countries' => $countries, 'title' => $title]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\state  $state
     * @return \Illuminate\Http\Response
     */
    public function update(StatesUpdateRequest $request, state $state)
    {
        $state->update($request->validated());

        return redirect()->route('states.index')->with(['message' => 'State updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\state  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy(state $state)
    {
        $state->delete();

        return redirect()->route('states.index')->with(['message' => 'State deleted successfully']);
    }
}
