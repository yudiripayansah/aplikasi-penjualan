<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $listData = Menu::all();
        $data['activePage'] = 'menu';
        $data['title'] = 'Menu';
        $data['listData'] = $listData;
        return view('pages.menu', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'menu';
        $data['title'] = 'Menu';
        return view('form.menu', $data);
    }
}
