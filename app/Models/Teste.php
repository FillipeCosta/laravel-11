<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Teste extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'teste';

    public $timestamps = false;

    protected $fillable = [
        'nome',
    ];


}
