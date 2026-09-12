<?php

namespace App\Models;

use Database\Factories\GalleryFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    /** @use HasFactory<GalleryFactory> */
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['title', 'sort_order', 'is_visible'];
}
