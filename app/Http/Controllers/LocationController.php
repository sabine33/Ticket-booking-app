<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('pages.locations', compact('locations'));
    }

    public function show($id)
    {
        return Location::find($id);
    }

    public function store(Request $request)
    {
        return Location::create($request->all());
    }


    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update($request->all());
        return $location;
    }

    public function destroy(Request $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return ["message" => 'Successfully Deleted', 'status' => 204];
    }
}
