<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Orders extends Model
{
    use HasFactory;
    protected $table = 'Orders';
    protected $fillable = [
        'id_customer',
        'type',
        'nama',
        'address',
        'email',
        'phone',
        'total_item',
        'total_price',
        'descreption',
        'status',
    ];

    public static function validate($validate)
    {
        $rule = [
            'id_customer' => 'required',
            'type' => 'required',
            'nama' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'total_item' => 'required',
            'total_price' => 'required',
            'descreption' => 'required',
        ];
    if ($validate['id']) {
        $rule['orders'] = 'required|unique:App\Models\Orders,orders,'.$validate['id'];
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