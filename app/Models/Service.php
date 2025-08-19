<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * Scope for active/published services.
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
