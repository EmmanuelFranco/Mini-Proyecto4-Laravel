<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursoDocente extends Model
{
    public $timestamps= false;
    use HasFactory;

    public function docente()
    {
        return $this->belongsTo(Docentes::class, 'docente_id');
    }

    // Relación con el modelo Curso
    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}


