<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * Scope: only active FAQs
     */
    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
