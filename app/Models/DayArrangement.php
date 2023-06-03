<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class DayArrangement extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date',
        'employee_id',
    ];

    public function arrangementable(): MorphTo
    {
        return $this->morphTo();
    }
}
