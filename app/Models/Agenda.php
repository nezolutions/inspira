<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Agenda extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'agendas';
    
    protected $fillable = [
        'description',
        'agenda',
        'timeline',
        'order'
    ];

    protected $casts = [
        'agenda' => 'string',
        'timeline' => 'string',
        'order' => 'integer'
    ];
}