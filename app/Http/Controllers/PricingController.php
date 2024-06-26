<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::all();
        return view('pricing.index', compact('pricings'));
    }

    public function admin()
    {
        $pricings = Pricing::all();
        return view('admin.pricing.index', compact('pricings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'plan_title' => 'required|string|max:255',
            'plan_description' => 'required|string',
            'plan_price' => 'required|numeric',
            'plan_feature_1' => 'nullable|string',
            'plan_feature_2' => 'nullable|string',
            'plan_feature_3' => 'nullable|string',
            'plan_feature_4' => 'nullable|string',
        ]);

        try {
            $pricing = new Pricing();
            $pricing->plan_title = $request->plan_title;
            $pricing->plan_description = $request->plan_description;
            $pricing->plan_price = $request->plan_price;
            $pricing->plan_feature_1 = $request->plan_feature_1;
            $pricing->plan_feature_2 = $request->plan_feature_2;
            $pricing->plan_feature_3 = $request->plan_feature_3;
            $pricing->plan_feature_4 = $request->plan_feature_4;
            $pricing->save();

            return redirect()->back()->with('success', 'Pricing plan created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, Pricing $pricing)
    {
        $request->validate([
            'plan_title' => 'required|string|max:255',
            'plan_description' => 'required|string',
            'plan_price' => 'required|numeric',
            'plan_feature_1' => 'nullable|string',
            'plan_feature_2' => 'nullable|string',
            'plan_feature_3' => 'nullable|string',
            'plan_feature_4' => 'nullable|string',
        ]);

        try {
            $pricing->plan_title = $request->plan_title;
            $pricing->plan_description = $request->plan_description;
            $pricing->plan_price = $request->plan_price;
            $pricing->plan_feature_1 = $request->plan_feature_1;
            $pricing->plan_feature_2 = $request->plan_feature_2;
            $pricing->plan_feature_3 = $request->plan_feature_3;
            $pricing->plan_feature_4 = $request->plan_feature_4;
            $pricing->save();

            return redirect()->back()->with('success', 'Pricing plan updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Pricing $pricing)
    {
        try {
            $pricing->delete();

            return redirect()->back()->with('success', 'Pricing plan deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

