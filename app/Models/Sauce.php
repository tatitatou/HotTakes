<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $table = 'sauces';

    // Correction de la clé primaire
    protected $primaryKey = 'sauceId';

    // Permet à Eloquent de gérer correctement les clés primaires non 'id'
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'name',
        'manufacturer',
        'description',
        'mainPepper',
        'imageUrl',
        'heat',
        'likes',
        'dislikes',
        'usersLiked',
        'usersDisliked'
    ];

    protected $casts = [
        'name' => 'string',
        'manufacturer' => 'string',
        'description' => 'string',
        'mainPepper' => 'string',
        'imageUrl' => 'string',
        'heat' => 'integer',
        'likes' => 'integer',
        'dislikes' => 'integer',
        'usersLiked' => 'array',
        'usersDisliked' => 'array'
    ];

    public $timestamps = false;
}
