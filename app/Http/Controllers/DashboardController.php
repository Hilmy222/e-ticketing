<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('event-organizer.dashboard');
    }
    public function adminDashboard()
    {
        return view('admin.dashboard');
    }
}
