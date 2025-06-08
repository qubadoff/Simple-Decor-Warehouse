<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DecorProductPivot extends Model
{
    protected $table = 'decor_product_pivots';

    public $incrementing = true;

    protected $fillable = [
        'decor_id',
        'product_id',
    ];

    public function decor(): BelongsTo
    {
        return $this->belongsTo(Decor::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
