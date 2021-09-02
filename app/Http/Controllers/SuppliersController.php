<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    public function index(Request $request)
    {
        $listData = User::all();
        $data['activePage'] = 'Suppliers';
        $data['title'] = 'Suppliers';
        $data['listData'] = $listData;
        return view('pages.Suppliers', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'suppliers';
        $data['title'] = 'Suppliers';
        return view('form.suppliers', $data);
    }
}
