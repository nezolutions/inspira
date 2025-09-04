<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Awards extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'awards';

    protected $fillable = [
        'title',
        'description',
        'online_prize',
        'offline_prize',
        'on_gold',
        'on_silver',
        'on_bronze',
        'off_gold',
        'off_silver',
        'off_bronze',
        'category',
        'order'
    ];

    protected $casts = [
        'title' => 'string',
        'order' => 'integer',
    ];
}
