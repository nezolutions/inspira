<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Fee extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'fees';
    protected $fillable = ['title', 'online_fee', 'on_fee_type', 'offline_fee', 'off_fee_type', 'order'];
}
