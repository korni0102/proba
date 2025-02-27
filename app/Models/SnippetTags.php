<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SnippetTags extends Model
{
    protected $fillable = [
        'tag_name',
        'snippet_id',
    ];

    public function snippets(): HasMany
    {
        return $this->hasMany(Snippets::class);
    }
}
