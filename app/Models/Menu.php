<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Validator;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $fillable = [
        'id_parent',
        'label',
        'link',
        'image',
    ];
    
    public static function validate($validate)
    {
        $rule = [
            'label' => 'required',
            'link' => 'required',
        ];
        if ($validate['id']) {
            $rule['id_parent'] = 'required|unique:App\Models\Menu,id_parent,'.$validate['id'];
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