<?php

namespace RestoApp\Entities;


use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    protected $fillable = ['nomeUsuario', 'emailUsuario','loginUsuario','senhaUsuario', 'statusUsuario'];
    public static $snakeAttributes = false;

    public function getAuthPassword()
    {
        return $this->senhaUsuario;
    }


}
