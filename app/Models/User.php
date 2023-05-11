<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'native_lang',
        'nivel_es',
        'nivel_eng',
        'nivel_de',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Funcion para encriptar la contraseña
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function subirNivel($idioma)
    {
        if ($idioma == 'es') {
            $this->nivel_es++;
        } elseif ($idioma == 'eng') {
            $this->nivel_eng++;
        } elseif ($idioma == 'de') {
            $this->nivel_de++;
        } else {
            // Si hay más idiomas, agregar más condiciones aquí
        }

        $this->save();
    }
    public function conocerNivel($idioma)
    /**Funcion para devolver el idioma del usuario */
    {
        switch ($idioma) {
            case 'Spanish':
                return  $this->nivel_es;
                break;
            case 'Inglés':
                return  $this->nivel_es;
                break;
            case 'Aleman':
                return  $this->nivel_es;
                break;

            default:
                return 0;
                break;
        }
    }
    public function cursoEmpezado($nivelCurso)
    /**Esta función sirve para conocer el nivel que puede tener un curso y saber si esta empezado o no */
    {
        if ($nivelCurso > 0) {
            return true;
        } else {
            return false;
        }
    }
}
