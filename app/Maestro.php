<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Maestro extends Model
{
    use Notifiable;

    protected $table = 'tabla_maestro';

    protected $fillable = [
        'campo1', 'campo2', 'comentarios',
    ];
}
