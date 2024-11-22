<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'game_name',
        'description',
        'release_date',
        'image_url',
        'platform',
        'genre',        
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
