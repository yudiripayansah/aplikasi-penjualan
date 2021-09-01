<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'price',
        'stock',
        'id_category',
        'id_group',
        'deleted_at',
    ];
    public static function validate($validate)
    {
        $rule = [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'id_category' => 'required',
            'id_group' => 'required',
        ];
        if ($validate['id']) {
            $rule['id_category'] = 'required|unique:App\Models\Products,id_category,'.$validate['id'];
        }
        $validator = Validator::make($validate, $rule);
        if ($validator->fails()) {
            $errors =  $validator->errors()->all();
            $res = array(
                'status' => false,
                'error' => $errors,
                'msg' => 'Error on Validation'
            );
        } else {
            $res = array(
                'status' => true,
                'msg' => 'Validation Ok'
            );
        }
        return $res;
    }
}