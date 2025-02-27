<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Codes extends Model
{
    protected $fillable = [
        'user_id',
        'code_category_id',
        'approved',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function codeCategory(): BelongsTo
    {
        return $this->belongsTo(CodeCategories::class);
    }

    public function snippets(): BelongsToMany
    {
        return $this->belongsToMany(
            Snippets::class,
            'codes_has_snippets',
            'code_id',
            'snippet_id'
        );
    }
}
