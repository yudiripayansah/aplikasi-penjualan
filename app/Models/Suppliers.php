<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;


class Suppliers extends Model
{
    use HasFactory;
    protected $table = 'suppliers'; 

    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'image',

    ];
    public static function validate($validate)
    {
        $rule = [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'image' => 'required',
        ];
        if ($validate['id']) {
            $rule['username'] = 'required|unique:App\Models\Suppliers,username,'.$validate['id'];
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


   
