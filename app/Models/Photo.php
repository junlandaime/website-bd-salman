<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'gallery_id',
        'user_id',
        'path',
        'caption'
    ];

    public function gallery()
    {
        return $this->belongsTo(Category::class, 'gallery_id');
    }
}
