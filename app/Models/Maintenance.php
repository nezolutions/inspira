<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
    protected $table = 'maintenances';

    protected $fillable = [
        'is_active'
    ];

    protected $hidden = [
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}
