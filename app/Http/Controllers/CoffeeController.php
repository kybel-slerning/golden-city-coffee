<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index()
{
    $coffees = Coffee::all();
    return view('coffees.index', compact('coffees'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('coffees.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
        'description' => 'nullable|string'
    ]);

    Coffee::create($request->all());

    return redirect()->route('coffees.index')->with('success', 'Kopi berhasil ditambah!');
}

    /**
     * Display the specified resource.
     */
    public function show(Coffee $coffee)
    {
        //
    }

  public function edit(Coffee $coffee)
{
    return view('coffees.edit', compact('coffee'));
}

public function update(Request $request, Coffee $coffee)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'price' => 'required|integer',
    ]);

    $coffee->update($request->all());

    return redirect()->route('coffees.index')->with('success', 'Kopi berhasil diupdate!');
}

public function destroy(Coffee $coffee)
{
    $coffee->delete();
    return redirect()->route('coffees.index')->with('success', 'Kopi dihapus!');
}}
