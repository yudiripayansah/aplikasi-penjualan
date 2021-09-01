<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Purchases extends Model
{
    use HasFactory;
    protected $table = 'Purchases';
    protected $fillable = [
        'name',
        'username',
        'email',
        'phone',
        'role',
        'password',
        'image',
    ];
    
    public static function validate($validate)
    {
        $rule = [
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required',
        ];
        if ($validate['id']) {
            $rule['username'] = 'required|unique:App\Models\User,username,'.$validate['id'];
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