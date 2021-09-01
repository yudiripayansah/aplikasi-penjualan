<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

class OrdersController extends Controller
{
    public function index(Request $request)
    {
        $listData = Orders::all();
        $data['activePage'] = 'orders';
        $data['title'] = 'Orders';
        $data['listData'] = $listData;
        return view('pages.orders', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'orders';
        $data['title'] = 'Orders';
        return view('form.orders', $data);
    }
}