<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data['activePage'] = 'dashboard';
        $data['title'] = 'Dashboard';
        return view('pages.dashboard', $data);
    }
}
