<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
   
    public function index(Request $request)
    {
        $listData = Products::all();
        $data['activePage'] = 'products';
        $data['title'] = 'Products';
        $data['listData'] = $listData;
        return view('pages.products', $data);
    }

    public function form($mode, Request $request)
    {
        $data['activePage'] = 'products';
        $data['title'] = 'Products';
        return view('form.products', $data);
    }

    public function store(Request $request)
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

        DB::table('products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
            'stock' => $request->stock,
            'id_category' => $request->id_category,
            'id_group' => $request->id_group,
        ]);
        return redirect('/products/');
    }
    
    public function edit($id)
    {
        $products = Products::find($id);
        return view('form.edit', $data);
    }

    public function update($id, Request $request)
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

        $products = Products::find($id);
        $products->name = $request->name;
        $products->description = $request->description;
        $products->image = $request->image;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->id_category = $request->id_category;
        $products->id_group = $request->id_group;
        $products->save();
        return redirect('/products');
        }

}
