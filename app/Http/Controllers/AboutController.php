<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('about.index', compact('abouts'));
    }

    public function admin()
    {
        $abouts = About::all();
        return view('admin.about.index', compact('abouts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading_title' => 'required|string|max:255',
            'heading_description' => 'required|string',
            'who_we_are' => 'required|string',
            'our_vision' => 'required|string',
            'our_history' => 'required|string',
            'picture' => 'nullable|string',
        ]);

        try {
            $about = new About();
            $about->heading_title = $request->heading_title;
            $about->heading_description = $request->heading_description;
            $about->who_we_are = $request->who_we_are;
            $about->our_vision = $request->our_vision;
            $about->our_history = $request->our_history;
            $about->picture = $request->picture;
            $about->save();

            return redirect()->back()->with('success', 'About content created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'heading_title' => 'required|string|max:255',
            'heading_description' => 'required|string',
            'who_we_are' => 'required|string',
            'our_vision' => 'required|string',
            'our_history' => 'required|string',
            'picture' => 'nullable|image|mimes:png,jpg,jpeg,avif,webp',
        ]);

        try {
            $about->heading_title = $request->heading_title;
            $about->heading_description = $request->heading_description;
            $about->who_we_are = $request->who_we_are;
            $about->our_vision = $request->our_vision;
            $about->our_history = $request->our_history;

            if ($request->hasFile('picture')) {
                $image = $request->file('picture');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('about'), $imageName);
                $imagePath = 'about/' . $imageName;
                $about->picture = $imagePath;
            }

            $about->save();

            return redirect()->back()->with('success', 'About content updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function destroy(About $about)
    {
        try {
            $about->delete();

            return redirect()->back()->with('success', 'About content deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
