<?php

namespace App\Http\Controllers;

use App\Models\ProfileGuru;
use Illuminate\Http\Request;

class ProfileGuruController extends Controller
{
    public function index()
{
    $profileguru = ProfileGuru::all();
    return view('admin.index', compact('profileguru'));
}


public function edit($id)
{
    $profileguru = ProfileGuru::findOrFail($id);
    return view('admin.edit', compact('profileguru'));
}


    public function update(Request $request, $id)
    {
        $profileguru = ProfileGuru::findOrFail($id);
        $profileguru->update($request->all());

        return redirect()->route('profileguru.index')->with('success', 'Profile guru updated successfully');
    }

    public function destroy($id)
    {
        $profileguru = ProfileGuru::findOrFail($id);
        $profileguru->delete();

        return redirect()->route('profileguru.index')->with('success', 'Profile guru deleted successfully');
    }
}

