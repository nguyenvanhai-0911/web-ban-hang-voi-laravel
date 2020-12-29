<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="tbl_product";
    protected $fillable = [
        'name',
        'image',
        'price',
        'discount',
        'content',
        'status',
        'idcat',
        'idbrand'
    ];
    public function category(){
        return $this->belongsTo('App\Models\Category','idcat','id');
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand','idbrand','id');
    }
}
