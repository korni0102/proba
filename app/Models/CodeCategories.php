<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * 
 *
 * @property int $id
 * @property int $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Codes> $codes
 * @property-read int|null $codes_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CodeCategories whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
