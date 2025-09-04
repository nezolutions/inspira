<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Participant extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'participants';
    
    protected $fillable = [
        'title',
        'icon',
        'background',
        'order'
    ];

    protected $casts = [
        'title' => 'string',
        'icon' => 'string',
        'background' => 'string',
        'ordeer' => 'integer'
    ];
}
