<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'content',
        'description',
        'image_path',
        'name',
        'user_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}
