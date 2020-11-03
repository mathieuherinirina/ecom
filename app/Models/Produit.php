<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'ID_prod',
        'ID_cat' ,
        'nom_prod',
        'prix',
        'img',
        'descri'        
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Categorie');
    }
}
