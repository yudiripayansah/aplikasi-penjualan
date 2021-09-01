<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $listData = User::orderBy('id', 'desc')->get();
        $data['activePage'] = 'user';
        $data['title'] = 'User';
        $data['listData'] = $listData;
        return view('pages.user', $data);
    }
    public function form($mode, $id=0, Request $request)
    {
        $data['activePage'] = 'user';
        $data['title'] = 'User';
        $data['formData'] = false;
        if ($id) {
            $data['formData'] = User::find($id);
        }
        return view('form.user', $data);
    }
    public function save(Request $request)
    {
        $dataForm = $request->all();
        if (isset($dataForm['id'])) {
            $dataUpdate = User::find($dataForm['id']);
            $dataUpdate->name = $dataForm['name'];
            $dataUpdate->username = $dataForm['username'];
            $dataUpdate->email = $dataForm['email'];
            $dataUpdate->phone = $dataForm['phone'];
            $dataUpdate->password = $dataForm['password'];
            $dataUpdate->role = $dataForm['role'];
            $dataUpdate->image = $dataForm['image'];
            $dataUpdate->save();
            $doSave = true;
        } else {
            $doSave = User::create($dataForm);
        }
        if ($doSave) {
            return redirect('/user')->with('success', 'Data Telah Disimpan');
        } else {
            return redirect('/user')->with('error', 'Data Gagal Disimpan');
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        if ($id) {
            $dataDelete = User::find($id);
            $dataDelete->delete();
            return redirect('/user')->with('success', 'Data Telah Dihapus');
        } else {
            return redirect('/user')->with('error', 'Tidak ada data yang dihapus, data tidak ditemukan');
        }
    }
}
