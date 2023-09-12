<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $places = Place::orderByDesc('id')->get();

        return view('dashboard.admin.places.index',compact('places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.places.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'nullable|string',
            'country' => 'required|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'description' => 'nullable|string',
        ]);

        // Create a new Place instance with the validated data
        Place::create($data);

        return redirect()->route('places.index')->with('msg', 'Place created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $place = Place::findOrFail($id);

        // Pass the place data to a view for rendering
        return view('places.show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $place = Place::findOrFail($id);

        return view('dashboard.admin.places.edit',compact('place'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            // Retrieve the place by its ID from the database
            $place = Place::findOrFail($id);

            // Validate the updated data
            $data = $request->validate([
                'name' => 'required|string',
                'address' => 'required|string',
                'city' => 'required|string',
                'state' => 'required|string',
                'zip_code' => 'nullable|string',
                'country' => 'required|string',
                'latitude' => 'nullable|numeric',
                'longitude' => 'nullable|numeric',
                'description' => 'nullable|string',
            ]);

            // Update the place with the validated data
            $place->update($data);

            return redirect()->route('places.show', ['id' => $place->id])->with('success', 'Place updated successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $place = Place::findOrFail($id);

        $place->delete();


        return redirect()->route('places.index')->with('msg' ,'Place Deleted Successfully');
    }
}
