<?php

namespace App\Http\Controllers;

use App\Models\Setting\Country;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     $countries = Country::all(); 
        return Inertia::render('Setting/Countries/Index', ['countries' => $countries]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Setting/Countries/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:countries',
            'status' => 'required|in:active,inactive',
        ]);

        $country = Country::create($validatedData);

        return response()->json(['statusCode' => 200, 'success' => 'Your request has been added!', 'data' => $country])
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        return Inertia::render('Setting/Countries/Edit', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255|unique:countries,code,' . $country->id,
            'status' => 'required|in:active,inactive',
        ]);

        $country->update($validatedData);

        return response()->json(['statusCode' => 200, 'success' => 'Country has been updated successfully!', 'data' => $country])
            ->setStatusCode(Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();

    return redirect()->route('Setting/Countries.Index')->with('success', 'Country has been deleted successfully!');
    }
}
