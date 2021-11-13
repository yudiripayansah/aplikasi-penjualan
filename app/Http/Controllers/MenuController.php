<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $listData = Menu::orderBy('id', 'desc')->get();
        $data['activePage'] = 'menu';
        $data['title'] = 'Menu';
        $data['listData'] = $listData;
        return view('pages.menu', $data);
    }
    public function form($mode, $id=0, Request $request)
    {
        $data['activePage'] = 'menu';
        $data['title'] = 'Menu';
        $data['formData'] = false;
        if ($id) {
            $data['formData'] = Menu::find($id);
        }
        return view('form.menu', $data);
    }
    public function save(Request $request)
    {
        $dataForm = $request->all();
        if (isset($dataForm['id'])) {
            $dataUpdate = Menu::find($dataForm['id']);
            $dataUpdate->id_parent = $dataForm['id_parent'];
            $dataUpdate->label = $dataForm['label'];
            $dataUpdate->link = $dataForm['link'];
            $dataUpdate->image = $dataForm['image'];
            $dataUpdate->save();
            $doSave = true;
        } else {
            $doSave = Menu::create($dataForm);
        }
        if ($doSave) {
            return redirect('/menu')->with('success', 'Data Telah Disimpan');
        } else {
            return redirect('/menu')->with('error', 'Data Gagal Disimpan');
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $dataDelete = Menu::find($id);
            $dataDelete->delete();
            return redirect('/menu')->with('success', 'Data Telah Dihapus');
        } else {
            return redirect('/menu')->with('error', 'Tidak ada data yang dihapus, data tidak ditemukan');
        }
    }
}

