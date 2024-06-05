<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'excerpt',
        'description',
        'image',
        'price',
        'facility',
        'jadwal',
        'meet',
        'status',
        'link',
        'event_start',
        'event_end',
        'published_at',
        'published_end',
        'category_id',
        'user_id'
    ];

    // protected $dates = [
    //     'event_start',
    //     'event_end',
    //     'published_at',
    //     'published_end'
    // ];

    protected $casts = [
        'event_start' => 'datetime',
        'event_end' => 'datetime',
        'published_at' => 'datetime',
        'published_end' => 'datetime',
    ];

    public function getStatusEventLabelAttribute()
    {
        switch ($this->status) {
            case 0:
                return '<span class="text-sm w-fit py-2 px-3 rounded-full bg-slate-500 text-white font-bold">Draft</span>';
                break;
            case 1:
                return '<span class="text-sm w-fit py-2 px-3 rounded-full bg-indigo-700 text-white font-bold">Active</span>';
                break;
            case 9:
                return '<span class="text-sm w-fit py-2 px-3 rounded-full bg-red-500 text-white font-bold">Arsip</span>';
                break;
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_events');
    }
}
