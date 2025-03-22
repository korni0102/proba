<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $tag_name
 * @property int $snippet_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Snippets> $snippets
 * @property-read int|null $snippets_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags whereSnippetId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags whereTagName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SnippetTags whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
