<?php

namespace App\Models;

use App\Models\commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class client extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function commandes()
    {
         return $this->hasMany(commande::class);
    }
}
