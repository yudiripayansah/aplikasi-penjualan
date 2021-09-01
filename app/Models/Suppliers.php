<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\model;


class suppliers extends model
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
            $rule['suppliers'] = 'required|unique:App\Models\suppliers,suppliers,'.$validate['id'];
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

