<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SuppliersController extends Controller
{
    public function index(Request $request)
    {
        return "Ini Halaman Suppliers";
    }
}
