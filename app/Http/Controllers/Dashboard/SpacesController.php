<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Space;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SpacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admin.spaces.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.admin.spaces.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'required|integer',
            'image_url' => 'required|string',
            'amenities' => 'required|array',
            'is_available' => 'required|boolean',
            'place_id' => 'required|integer',
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/spaces'), $img_name);






      $space =  Space::create([
            'name' => $request->name,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'image_url' => $img_name,
            'amenities' => $request->amenities,
            'is_available' => $request->is_available,
            'place_id' => $request->place_id,

        ]);

             // Upload Album to images table if exists
             if($request->has('album')) {
                foreach($request->album as $item) {
                    $img_name = rand().time().$item->getClientOriginalName();
                    $item->move(public_path('uploads/spaces'), $img_name);
                    Image::create([
                        'path' => $img_name,
                        'space_id' => $space->id
                    ]);
                }
            }

        return redirect()->route('spaces.index')->with('msg', 'Space Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $space = Space::find($id);

        if (!$space) {
            return redirect()->route('spaces.index')->with('error', 'Space not found');
        }

        return view('spaces.show', compact('space'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $space = Space::findOrFail($id);


        return view('dashboard.admin.spaces.edit', compact('space'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Retrieve the space by its ID from the database
        $space = Space::find($id);

        // Check if the space was found
        if (!$space) {
            return redirect()->route('spaces.index')->with('error', 'Space not found');
        }

        // Validate the updated data
        $data = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'capacity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'amenities' => 'required|array',
            'is_available' => 'required|boolean',
            'place_id' => 'required|integer',
        ]);

        // Update the space with the validated data
        $space->update($data);

        // Handle image update, if provided
        if ($request->hasFile('image')) {
            $img_name = rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('uploads/spaces'), $img_name);
            $space->image_url = $img_name;
            $space->save();
        }

        return redirect()->route('spaces.show', ['id' => $space->id])->with('success', 'Space updated successfully');
    }

    public function destroy($id)
    {
        $space = Space::findOrFail($id);

        File::delete(public_path('uploads/spaces/'.$space->image));

        $space->album()->delete();

        $space->delete();


        return redirect()->route('spaces.index')->with('success', 'Space and images deleted successfully');
    }
}
