<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('home.index', compact('homes'));
    }

    public function admin()
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'picture' => 'nullable|string',
        ]);

        try {
            $home = new Home();
            $home->title = $request->title;
            $home->description = $request->description;
            $home->picture = $request->picture;
            $home->save();

            return redirect()->back()->with('success', 'Home content created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }



public function update(Request $request, Home $home)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'picture' => 'nullable|image|mimes:png,jpg,jpeg,avif,webp',
    ]);

    try {
        $home->title = $request->title;
        $home->description = $request->description;

        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('home'), $imageName);
            $imagePath = 'home/' . $imageName;
            $home->picture = $imagePath;
        }

        $home->save();

        return redirect()->back()->with('success', 'Home content updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
}



    public function destroy(Home $home)
    {
        try {
            $home->delete();

            return redirect()->back()->with('success', 'Home content deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

