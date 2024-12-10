<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Game;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'website', 'about', 'image_url'];




    public function games()
    {
        return $this->belongsToMany(Game::class);
    }

  
}
