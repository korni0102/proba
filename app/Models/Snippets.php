<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Snippets extends Model
{
    protected $fillable = [
        'description',
        'row',
        'crispdm',
        'categories_id'
    ];

    public function rowCategory(): BelongsTo
    {
        return $this->belongsTo(RowCategories::class);
    }

    public function codes(): BelongsToMany
    {
        return $this->belongsToMany(
            Codes::class,
            'codes_has_snippets',
            'snippet_id',
            'code_id'
        );
    }

    public function tags(): HasMany
    {
        return $this->hasMany(SnippetTags::class);
    }
}
