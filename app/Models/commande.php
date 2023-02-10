<?php

namespace App\Models;

use App\Models\client;
use App\Models\article;
use App\Models\commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commande extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function client()
    {
        return $this->belongsTo(client::class);
    }
    public function article()
    {
        return $this->belongsTo(article::class);
    }
    public function commande()
    {
        return $this->belongsTo(commande::class);
    }
}
