<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    protected $table = 'formats';

    protected $fillable = [
        'content',
        'document',
        'order'
    ];

    protected $casts = [
        'content' => 'string',
        'document' => 'string',
        'order' => 'integer'
    ];
}
