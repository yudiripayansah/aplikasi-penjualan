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
    public function form($mode, $id = 0, Request $request)
    {
        $data['activePage'] = 'purchaseitem';
        $data['title'] = 'PurchaseItem';
        $data['formData'] = false;
        if ($id) {
            $data['formData'] = PurchaseItem::find($id);
        }
        return view('form.purchaseitem', $data);
    }
    
    public function store(Request $request){
        $dataForm = $request->all();
        if(isset($dataForm['id'])){
            $dataUpdate = PurchaseItem::find($dataForm['id']);
            $dataUpdate->id_purchase = $dataForm['id_purchase'];
            $dataUpdate->id_product = $dataForm['id_product'];
            $dataUpdate->price = $dataForm['price'];
            $dataUpdate->description = $dataForm['description'];
            $dataUpdate->save();
            $doSave = true;
        }else{
            $doSave = PurchaseItem::create($dataForm);
        }
        if($doSave){
            return redirect('/purchaseitems')->with('success', 'Data telah disimpan');
        }else{
            return redirect('/purchaseitems')->with('error', 'Data gagal disimpan');
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $dataDelete = PurchaseItem::find($id);
            $dataDelete->delete();
            return redirect('/purchaseitems')->with('success', 'Data Telah Dihapus');
        } else {
            return redirect('/purchaseitems')->with('error', 'Tidak ada data yang dihapus, data tidak ditemukan');
        }
    }
}