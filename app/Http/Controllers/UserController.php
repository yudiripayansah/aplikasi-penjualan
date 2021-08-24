<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $listData = User::all();
        $data['activePage'] = 'user';
        $data['title'] = 'User';
        $data['listData'] = $listData;
        return view('pages.user', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'user';
        $data['title'] = 'User';
        return view('form.user', $data);
    }
}
