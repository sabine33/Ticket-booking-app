<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Flight;
use App\User;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with(['user', 'flight'])->get();
        $flights = Flight::with(['airlines', 'to_location', 'from_location'])->get();
        $users = User::all();
        // return json_encode($flights);
        return view('pages.carts', compact(['users', 'carts', 'flights']));
    }

    public function show($id)
    {
        return Cart::find($id);
    }

    public function store(Request $request)
    {
        return Cart::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Cart = Cart::findOrFail($id);
        $Cart->update($request->all());

        return $Cart;
    }

    public function delete(Request $request, $id)
    {
        $Cart = Cart::findOrFail($id);
        $Cart->delete();

        return 204;
    }
}
