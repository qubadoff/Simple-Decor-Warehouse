<?php

namespace App\Models;

use App\Enum\Decor\DecorStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Decor extends Model
{
    use SoftDeletes;

    protected $table = 'decors';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => DecorStatusEnum::class,
    ];

    public function decorProducts(): HasMany
    {
        return $this->hasMany(DecorProductPivot::class, 'decor_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(DecorCategory::class, 'category_id');
    }
}
