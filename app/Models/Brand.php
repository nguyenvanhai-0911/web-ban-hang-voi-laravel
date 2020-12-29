<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table="tbl_brand";
    protected $fillable = [
        'name',
        'image',
        'content',
        'status',
    ];
}
