<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Awards extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'awards';
    protected $fillable = ['icon', 'title', 'description', 'category'];
}
