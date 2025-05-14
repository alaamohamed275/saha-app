<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Service;
use App\Models\ContactInfo;
use App\Models\Mission;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = AboutUs::first();
        $services = Service::all();
        $contact= ContactInfo::first();
        $missions = Mission::all();
        return view('home', compact('about', 'services', 'contact', 'missions'));
    }

    public function contact()
    {
        $about = AboutUs::first();
        $services = Service::all();
        $contact= ContactInfo::first();
        $missions = Mission::all();
        return view('contact', compact('about', 'services', 'contact', 'missions'));
    }

     public function about()
    {
        $about = AboutUs::first();
        $services = Service::all();
        $contact= ContactInfo::first();
        $missions = Mission::all();
        return view('about', compact('about', 'services', 'contact', 'missions'));
    }
}
