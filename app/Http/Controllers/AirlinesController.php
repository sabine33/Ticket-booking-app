<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airlines;

class AirlinesController extends Controller
{


    public function getAll()
    {
        return Airlines::all();
    }

    public function index()
    {
        $airlines = Airlines::all();
        return view('pages.airlines', compact(['airlines']));
    }

    public function show($id)
    {
        return Airlines::find($id);
    }

    public function store(Request $request)
    {
        return Airlines::create($request->all());
    }


    public function update(Request $request, $id)
    {
        $airlines = Airlines::findOrFail($id);
        $airlines->update($request->all());
        return $airlines;
    }

    public function destroy(Request $request, $id)
    {
        $airlines = Airlines::findOrFail($id);
        $airlines->delete();
        return ["message" => 'Successfully Deleted', 'status' => 204];
    }
}
