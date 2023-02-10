<?php

namespace App\Models;

use App\Models\article;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorie extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function articles() {
         return $this->hasMany(article::class);
    }
}
