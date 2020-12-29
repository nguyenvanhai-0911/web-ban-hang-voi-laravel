<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="tbl_category";
    protected $fillable = [
        'name',
        'image',
        'price',
        'discount',
        'content',
        'status',
    ];
    public function owner(){
        return $this->belongsTo('User');
    }

    // In product model
    public function product(){
        return $this->hasMany('App\Models\Product', 'idcat');
    }
}
