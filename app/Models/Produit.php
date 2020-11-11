<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'id',
        'nomprod',
        'category_id' ,
        'img_url',
        'prix',
        'description'        
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Categorie');
    }
}
