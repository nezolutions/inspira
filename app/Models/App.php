<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class App extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'apps';

    protected $fillable = [
        'app_icon',
        'app_name',
        'is_fname_showed',
        'is_lname_showed',
        'is_image_fit',
        'register'
    ];

    protected $casts = [
        'app_icon' => 'string',
        'app_name' => 'array',
        'is_fname_showed' => 'boolean',
        'is_lname_showed' => 'boolean',
        'is_image_fit' => 'boolean',
    ];
}
