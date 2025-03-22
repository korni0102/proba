<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Snippets> $snippets
 * @property-read int|null $snippets_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RowCategories whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
