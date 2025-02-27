<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CodeCategories extends Model
{
    public const TYPE_SNIPPET = 1;

    protected $fillable = [
        'type'
    ];

    public function codes(): HasMany
    {
        return $this->hasMany(Codes::class);
    }
}
