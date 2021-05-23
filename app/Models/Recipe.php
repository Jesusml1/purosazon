<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // table name
    protected $table = 'recipes';

    // id casting
    protected $casts = [
        'id' => 'string'
    ];

    // model relation
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
