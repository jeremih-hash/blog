<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Firefly\FilamentBlog\Models\Post;

class YoutubeVideo extends Model
{
    protected $fillable = [
        'video_id',
        'title',
        'description',
        'thumbnail_url',
        'channel_id',
        'channel_title',
        'published_at',
        'processed',
        'post_id',
        'captions',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'processed' => 'boolean',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
