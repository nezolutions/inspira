<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Agenda extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'agendas';
    protected $fillable = ['description', 'agenda', 'prefix_date', 'suffix_date', 'order'];
    // protected $casts = ['prefix_date' => 'datetime', 'suffix_date' => 'datetime'];
}