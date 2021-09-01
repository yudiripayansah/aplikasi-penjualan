<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PurchaseItem;

class PurchaseItemsController extends Controller
{
    public function index(Request $request)
    {
        $listData = PurchaseItem::all();
        $data['activePage'] = 'purchaseitem';
        $data['title'] = 'PurchaseItem';
        $data['listData'] = $listData;
        return view('pages.purchaseitem', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'purchaseitem';
        $data['title'] = 'PurchaseItem';
        // $data['formData'] = null;
        // if($id_purchase){
        //     $data['formData'] = PurchaseItem::find($id_purchase);
        // }
        return view('form.purchaseitem', $data);
    }
    
    public function store(Request $request){
        $dataForm = $request->all();
        if(isset($dataForm['id_purchase'])){
            $dataUpdate = PurchaseItem::find($dataForm['id_purchase']);
            $dataUpdate->id_product = $dataForm['id_product'];
            $dataUpdate->price = $dataForm['price'];
            $dataUpdate->description = $dataForm['description'];
            $dataUpdate->save();
            $doSave = true;
        }else{
            $doSave = PurchaseItem::create($dataForm);
        }
        if($doSave){
            return redirect('/purchaseitem')->with('success', 'Data telah disimpan');
        }else{
            return redirect('/purchaseitem')->with('error', 'Data gagal disimpan');
        }
    }
}