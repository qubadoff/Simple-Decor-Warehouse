<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DecorCategory extends Model
{
    use SoftDeletes;

    protected $table = 'decor_categories';

    protected $fillable = [
        'name',
        'description',
        'icon',
    ];
}
