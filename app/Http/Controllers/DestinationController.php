<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DestinationController extends Controller
{
    function index()
    {
        $destinations = Destination::all();
        return view('home', compact('destinations'));
    }

    function addPage()
    {
        $kategoris = Kategori::all();
        return view('crud.add', compact('kategoris'));
    }

    function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'address' => 'required',
            'coordinat' => 'required',
            'kategori_id' => 'required',
        ]);

        $filename = date('Y-m-d') . '-' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('images', $filename, 'public');

        Destination::create([
            'name' => $request->name,
            'image' => $filename,
            'address' => $request->address,
            'coordinat' => $request->coordinat,
            'kategori_id' => $request->kategori_id,
        ]);

        return redirect()->route('home')->with('message', 'Destination Successfully Added!');
    }

    function editPage(Destination $destination)
    {
        $kategoris = Kategori::all();
        return view('crud.edit', compact('destination', 'kategoris'));
    }

    function update(Request $request, Destination $destination)
    {
        $request->validate([
            'name' => 'nullable',
            'image' => 'nullable',
            'address' => 'nullable',
            'coordinat' => 'nullable',
            'kategori_id' => 'nullable',
        ]);

        $destination->fill([
            'name' => $request->name,
            'address' => $request->address,
            'coordinat' => $request->coordinat,
            'kategori_id' => $request->kategori_id,
        ]);

        if ($request->hasFile('image')) {
            $filename = date('Y-m-d') . '-' . uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('images', $filename, 'public');
            
            if($destination->image) {
                Storage::disk('public')->delete($destination->image);
            }

            $destination->image = $filename;
        }

        $destination->save();

        return redirect()->route('home')->with('message', 'Destination Successfully Updated!');
    }

    function delete(Destination $destination) {
        $destination->delete();

        return redirect()->route('home')->with('message', 'Destination Successfully Deleted!');
    }
}
