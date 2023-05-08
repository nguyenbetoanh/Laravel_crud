<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table ='product';
    protected $primaryKey='productId';
    public $timestamps=false;
    protected $fillable=[
        'productId','productName','price','productDate','productStatus'
    ];
}
