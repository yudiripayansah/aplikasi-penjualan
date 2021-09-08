<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Suppliers;

class SuppliersController extends Controller
{
    public function index(Request $request)
    {
        $listData = Suppliers::all();
        $data['activePage'] = 'Suppliers';
        $data['title'] = 'Suppliers';
        $data['listData'] = $listData;
        return view('pages.Suppliers', $data);
    }
    public function form($mode, Request $request)
    {
        $data['activePage'] = 'suppliers';
        $data['title'] = 'Suppliers';
        return view('form.suppliers', $data);
    }
    public function save(Request $request)
    {
        $dataForm = $request->all();
        if (isset($dataForm['id'])) {
            $dataUpdate = Suppliers::find($dataForm['id']);
            $dataUpdate->name = $dataForm['name'];
            $dataUpdate->email = $dataForm['email'];
            $dataUpdate->address = $dataForm['address'];
            $dataUpdate->phone = $dataForm['phone'];
            $dataUpdate->image = $dataForm['image'];
            $dataUpdate->save();
            $doSave = true;
        } else {
            $doSave = Suppliers::create($dataForm);
        }
        if ($doSave) {
            return redirect('/suppliers')->with('success', 'Data Telah Disimpan');
        } else {
            return redirect('/suppliers')->with('error', 'Data Gagal Disimpan');
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $dataDelete = Suppliers::find($id);
            $dataDelete->delete();
            return redirect('/suppliers')->with('success', 'Data Telah Dihapus');
        } else {
            return redirect('/suppliers')->with('error', 'Tidak ada data yang dihapus, data tidak ditemukan');
        }
    }
}

