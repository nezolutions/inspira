<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    protected $table = 'faqs';

    protected $fillable = [
        'q',
        'a',
        'order'
    ];

    protected $casts = [
        'q' => 'string',
        'order' => 'integer'
    ];
}
