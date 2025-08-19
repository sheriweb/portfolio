<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * Category relation.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Scope for published articles.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Get a usable image URL with fallback.
     */
    public function getImageUrlAttribute(): string
    {
        if ($this->image) {
            $path = ltrim($this->image, '/');
            // If stored like 'public/xyz.jpg', strip the 'public/' prefix for Storage::disk('public')
            if (Str::startsWith($path, 'public/')) {
                $path = Str::after($path, 'public/');
            }

            if (Storage::disk('public')->exists($path)) {
                return asset('storage/'.$path);
            }
        }

        return asset('front/images/illustration-1.png');
    }
}
