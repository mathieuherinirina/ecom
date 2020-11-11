<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_prod',
        'nom_prod',
        'id_categorie' ,
        'img_url',
        'prix',
        'description'        
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Categorie');
    }
}
