<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Topic extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'topics';
    protected $fillable = ['title', 'list', 'order'];
}
