<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $listData = Products::orderBy('id', 'desc')->get();
        $data['activePage'] = 'products';
        $data['title'] = 'Products';
        $data['listData'] = $listData;
        return view('pages.products', $data);
    }

    public function form($mode,  $id=0, Request $request)
    {
        $data['activePage'] = 'products';
        $data['title'] = 'Products';
        $data['formData'] = false;
        if ($id) {
            $data['formData'] = Products::find($id);
        }
        return view('form.products', $data);
    }

    public function save(Request $request)
    {
        $this->validate($request,[
	        'name' => 'required',
    		'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'id_category' => 'required',
            'id_group' => 'required',
        ]);

        $dataForm = $request->all();
        if (isset($dataForm['id'])) {
            $dataUpdate = Products::find($dataForm['id']);
            $dataUpdate->name = $dataForm['name'];
            $dataUpdate->description = $dataForm['description'];
            $dataUpdate->image = $dataForm['image'];
            $dataUpdate->price = $dataForm['price'];
            $dataUpdate->stock = $dataForm['stock'];
            $dataUpdate->id_category = $dataForm['id_category'];
            $dataUpdate->id_group = $dataForm['id_group'];
            $dataUpdate->save();
            $doSave = true;
        } else {
            $doSave = Products::create($dataForm);
        }
        if ($doSave) {
            return redirect('/products')->with('success', 'Data Telah Disimpan');
        } else {
            return redirect('/products')->with('error', 'Data Gagal Disimpan');
        }
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $dataDelete = Products::find($id);
            $dataDelete->delete();
            return redirect('/products')->with('success', 'Data Telah Dihapus');
        } else {
            return redirect('/products')->with('error', 'Tidak ada data yang dihapus, data tidak ditemukan');
        }
    }
}
   
    
    
