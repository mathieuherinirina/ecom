<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_cart',
        'id_user' ,
        'id_prod',
        'status'
    ];
}
