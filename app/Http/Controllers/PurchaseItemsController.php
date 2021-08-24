<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PurchaseItem;

class PurchaseItemsController extends Controller
{
    public function index(Request $request)
    {
        $purchaseItem = PurchaseItem::all();

        return view('purchaseitem', ['purchaseitem' => $purchaseItem]);
    }
}