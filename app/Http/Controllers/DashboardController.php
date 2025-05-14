<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use App\Models\ContactMessage;
use App\Models\Mission;

class DashboardController extends Controller
{
     public function index()
    {
        $stats = [
            'users' => User::count(),
            'services' => Service::count(),
            'messages' => ContactMessage::count(),
            'missions' => Mission::count(),
            'recentMessages' => ContactMessage::latest()->take(5)->get(),
            'recentUsers' => User::latest()->take(5)->get(),
        ];

        return view('dashboard.home', compact('stats'));
    }
}
