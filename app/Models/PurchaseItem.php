<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseItem extends Model
{
    use HasFactory;
    protected $table = 'purchase_items';

    protected $fillable = [
        'id',
        'id_purchase',
        'id_product',
        'price',
        'description',
        'deleted_at'
    ];
}
