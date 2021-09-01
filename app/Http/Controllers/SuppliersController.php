<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
    public function index(Request $request)
    
        {
            $listData = Suppliers::all();
            $data['activePage'] = 'suppliers';
            $data['title'] = 'suppliers';
            $data['listData'] = $listData;
            return view('pages.suppliers', $data);
        }
        public function form($mode, Request $request)
        {
            $data['activePage'] = 'suppliers';
            $data['title'] = 'suppliers';
            return view('form.suppliers', $data);
        
    
    }
}
