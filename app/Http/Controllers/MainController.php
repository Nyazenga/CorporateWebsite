<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Footer;
use App\Models\Home;
use App\Models\Pricing;
use App\Models\Service;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MainController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        $footers = Footer::all();
        $homes = Home::all();
        $pricings = Pricing::all();
        $services = Service::all();
        return view('index', compact('abouts','footers','homes','pricings','services'));
    }
}
