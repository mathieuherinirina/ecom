<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'ID_cart',
        'ID_users' ,
        'ID_prod',
        'status_payer'                    
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
