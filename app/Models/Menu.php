<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Menu extends Model
{
    /** @use HasFactory<\Database\Factories\MenuFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'type',
        'photo'
    ];

    public static $types = [
        'bierre',
        'sucre',
        'nourriture',
        'liqueur',
        'eau',
    ];

    public function getDeviseAttribute()
    {
        return $this->price . ' Fc';
    }

    public function getAvatarAttribute()
    {
        return $this->photo ? Storage::url($this->photo) : url('noimages.png');
    }
}
