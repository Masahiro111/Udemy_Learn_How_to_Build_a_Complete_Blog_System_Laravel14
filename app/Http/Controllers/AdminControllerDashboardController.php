<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllerDashboardController extends Controller
{
    public function index()
    {
        return view('admin_dashboard.index');
    }
}
