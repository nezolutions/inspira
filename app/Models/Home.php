<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Home extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'homes';

    protected $fillable = [
        'background',
        'title',
        'description'
    ];

    protected $casts = [
        'background' => 'string',
    ];
}
