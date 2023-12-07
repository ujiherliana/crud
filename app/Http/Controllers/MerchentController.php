<?php

namespace App\Http\Controllers;

use App\Models\Merchent;
use Illuminate\Http\Request;

class MerchentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $merchent = Merchent::orderBy('id', 'desc')->get();
        return view('merchent.index', compact('merchent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('merchent.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'alamat' => 'required|max:255',
            'jenis_toko' => 'required'
        ]);

        Merchent::create($request->all());
        return redirect()->route('merchent.index')->with('success', 'Succes');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $merchent = Merchent::find($id);

        return view('merchent.show', compact('merchent'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $merchent = Merchent::findOrFail($id);

        return view('merchent.edit', compact('merchent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:100',
            'alamat' => 'required|max:255',
            'jenis_toko' => 'required'
        ]);

        $merchent = Merchent::find($id);
        $merchent->update($request->all());

        return redirect()->route('merchent.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $merchent = Merchent::find($id);
        $merchent->delete();

        return redirect()->route('merchent.index');
    }
}
