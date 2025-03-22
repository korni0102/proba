<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * 
 *
 * @property int $id
 * @property int $user_id
 * @property int $code_category_id
 * @property int $approved
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\CodeCategories $codeCategory
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Snippets> $snippets
 * @property-read int|null $snippets_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes whereCodeCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Codes whereUserId($value)
 * @mixin \Eloquent
 */
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
