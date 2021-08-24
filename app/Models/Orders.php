<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Models;


class orders extends Models
{
    use HasFactory;
    protected $table = 'orders';

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
}