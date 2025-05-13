<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Here you would normally fetch data from your database
        // For this example, we'll use dummy data
        
        $data = [
            'monthly_earnings' => 40000,
            'annual_earnings' => 215000,
            'task_percentage' => 50,
            'pending_requests' => 18,
            // Add more data as needed
        ];
        
        return view('dashboard.home', $data);
    }
}
