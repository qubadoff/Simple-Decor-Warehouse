<?php

namespace App\Models;

use App\Enum\Decor\DecorOrderStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DecorOrder extends Model
{
    use SoftDeletes;

    protected $table = 'decor_orders';

    protected $guarded = ['id'];

    protected $casts = [
        'status' => DecorOrderStatusEnum::class,
    ];

    public function decor(): BelongsTo
    {
        return $this->belongsTo(Decor::class, 'decor_id');
    }
}
