<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tipo_cardapio extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "cardapio";
    public $timestamps = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function Produto()
    {
        return $this->hasMany(Produto::class, 'tipo_id');
    }
}
