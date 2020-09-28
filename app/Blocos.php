<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\Condominio as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Blocos extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = "blocos";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cond', 'numero', 'quantidade_ap',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function condominio()
    {
        return $this->belongsTo("App\Condominios");
    }
}
