<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AgendaTable extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'agenda_tables';
    protected $fillable = ['title', 'prefix_date', 'suffix_date'];
}