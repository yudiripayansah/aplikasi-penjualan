<?php

namespace App\Http\Controllers;

use App\Models\Purchases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchasesController extends Controller
{
    public function index(Request $request)
    {
        $listData = Purchases::all();
        $data['activePage'] = 'Purchases';
        $data['title'] = 'Purchases';
        $data['listData'] = $listData;
        return view('pages.Purchases', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'Purchases';
        $data['title'] = 'Purchases';
        return view('form.Purchases', $data);
    }
}