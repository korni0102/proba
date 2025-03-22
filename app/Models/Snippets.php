<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property string $description
 * @property string $row
 * @property int $crispdm
 * @property int $category_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Codes> $codes
 * @property-read int|null $codes_count
 * @property-read \App\Models\RowCategories|null $rowCategory
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\SnippetTags> $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereCrispdm($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereRow($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Snippets whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Snippets extends Model
{
    protected $fillable = [
        'description',
        'row',
        'crispdm',
        'category_id'
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
