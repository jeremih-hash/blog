<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapedContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'title',
        'content',
        'description',
        'scraped_at'
    ];

    protected $casts = [
        'scraped_at' => 'datetime'
    ];
}