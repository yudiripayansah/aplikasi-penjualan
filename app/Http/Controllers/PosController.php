<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index(Request $request)
    {
        $data['activePage'] = 'pos';
        $data['title'] = 'Pos';
        return view('pages.pos', $data);
    }
}
