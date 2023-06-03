<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OpenShift extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
    ];
}
