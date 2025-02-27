<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RowCategories extends Model
{
    protected $fillable = [
        'type'
    ];

    public function snippets(): HasMany
    {
        return $this->hasMany(Snippets::class);
    }
}
