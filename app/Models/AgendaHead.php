<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AgendaHead extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'agenda_heads';
    protected $fillable = ['description'];
}
