<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Curso extends Model
{
    public $idioma;
    public $nivel;
    public $preguntas;

    public function __construct($idioma = '', $nivel = 0, $preguntas = 'gola')
    {
        $this->idioma = $idioma;
        $this->nivel = $nivel;
        $this->preguntas = $preguntas;
    }
}
