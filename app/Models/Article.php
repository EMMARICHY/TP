<?php

namespace App\Models;

use App\Models\article;
use App\Models\categorie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }
    public function commandes()
    {
         return $this->hasMany(commande::class);
    }
}
