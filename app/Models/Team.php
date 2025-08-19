<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Team extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * Get a usable image URL with fallback.
     */
    public function getImageUrlAttribute(): string
    {
        $image = $this->images ?? null;
        if ($image) {
            $path = ltrim($image, '/');
            if (Str::startsWith($path, 'public/')) {
                $path = Str::after($path, 'public/');
            }
            if (Storage::disk('public')->exists($path)) {
                return asset('storage/' . $path);
            }
        }
        return asset('front/images/illustration-1.png');
    }
}
