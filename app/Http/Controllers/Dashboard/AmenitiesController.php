<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $amenities = Amenity::orderByDesc('id')->get();
        return view('dashboard.admin.amenities.index',compact('amenities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.amenities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   dd($request->all());

         $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);


        $img_name = rand().time().$request->file('image_url')->getClientOriginalName();
        $request->file('image_url')->move(public_path('uploads/amenities'), $img_name);



        Amenity::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $img_name,
        ]);

    return redirect()->route('amenities.index')->with('msg', 'Amenity Created Successfully');





    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
