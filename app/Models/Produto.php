<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Produto extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "produto";
    public $timestamps = null;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function Tipo_cardapio()
    {
        return $this->hasOne(Tipo_cardapio::class);
    }
}
