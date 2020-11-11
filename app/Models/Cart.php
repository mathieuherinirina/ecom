<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'id',
        'id_user' ,
        'produits',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function produit()
    {
        return $this->belongsTo('App\Models\Produit');
    }

}
