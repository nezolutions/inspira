<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Arr;

class About extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'abouts';

    protected $fillable = [
        'logo',
        'content',
        'highlights', 
        'venue'
    ];

    protected $casts = [
        'logo' => 'string',
        'highlights' => 'array',
        'venue' => 'string'
    ];
}
