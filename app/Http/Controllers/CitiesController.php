<?php

namespace App\Http\Controllers;

use App\Models\Setting\Cities;
use App\Models\Setting\State;
use App\Models\Setting\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Inertia\Inertia;

class CitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cities = Cities::with('country', 'state')->get();
        return Inertia::render('Setting/Cities/Index', ['cities' => $cities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        $states = State::all();
        return Inertia::render('Setting/Cities/Create', ['countries' => $countries, 'states' => $states]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'countries_id' => 'required|exists:countries,id',
            'states_id' => 'required|exists:states,id',
            'status' => 'required|in:active,inactive',
        ]);

        $city = Cities::create($validatedData);

        return response()->json(['statusCode' => 200, 'success' => 'Your request has been added!', 'data' => $city])
            ->setStatusCode(200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cities $cities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cities $cities)
    {
        $countries = Country::all();
        $states = State::all();
        return Inertia::render('Setting/Cities/Edit', ['states' => $states, 'countries' => $countries, 'cities' => $cities]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cities $cities)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'countries_id' => 'required|exists:countries,id',
            'states_id' => 'required|exists:states,id',
            'status' => 'required|in:active,inactive',
        ]);

        $cities->update($validatedData);

        return response()->json(['statusCode' => 200, 'success' => 'City has been updated successfully!', 'data' => $cities])
            ->setStatusCode(200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cities $city)
    {
        $city->delete();
        return response()->json(['statusCode' => 200, 'success' => 'City has been deleted successfully!']);
    }
}
