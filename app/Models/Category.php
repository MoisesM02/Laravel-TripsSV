<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'description',
        'image_path',
        'user_id'
    ];

    public function places(): HasMany
    {
        return $this->hasMany(Places::class);
    }

}
