<?php

namespace App\Http\Controllers;

use App\Models\Setting\State;
use App\Models\Setting\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Inertia\Inertia;


class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = State::with('country')->get();
        return Inertia::render('Setting/States/Index', ['states' => $states]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $countries = Country::all();
        return Inertia::render('Setting/States/Create', ['countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
             'countries_id' => 'required|exists:countries,id',
            'status' => 'required|in:active,inactive',
        ]);

        $state = State::create($validatedData);

        return response()->json(['statusCode' => 200, 'success' => 'Your request has been added!', 'data' => $state])
            ->setStatusCode(200); // Alternatively, use Response::HTTP_OK
    }

    /**
     * Display the specified resource.
     */
    public function show(State $state)
    {
        // Implement if needed
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(State $state)
    {
        $countries = Country::all();
        return Inertia::render('Setting/States/Edit', ['state' => $state, 'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, State $state)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'countries_id' => 'required|exists:countries,id',
            'status' => 'required|in:active,inactive',
        ]);

        $state->update($validatedData);

         return redirect()->route('states.index')->with('success', 'State has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(State $state)
    {
        $state->delete();

        return redirect()->route('Setting/States.Index')->with('success', 'State has been deleted successfully!');
    }
}
