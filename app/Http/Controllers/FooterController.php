<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('footer.index', compact('footers'));
    }

    public function admin()
    {
        $footers = Footer::all();
        return view('admin.footer.index', compact('footers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $footer = new Footer();
            $footer->title = $request->title;
            $footer->description = $request->description;
            $footer->save();

            return redirect()->back()->with('success', 'Footer content created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, Footer $footer)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        try {
            $footer->title = $request->title;
            $footer->description = $request->description;
            $footer->save();

            return redirect()->back()->with('success', 'Footer content updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Footer $footer)
    {
        try {
            $footer->delete();
            return redirect()->back()->with('success', 'Footer content deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
