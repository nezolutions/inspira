<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Competition extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'competitions';
    protected $fillable = ['title', 'content', 'order'];
}
