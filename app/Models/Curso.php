<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public $timestamps= false;
    use HasFactory;
    public function estudiante()
    {
         return $this->belongsTo(Estudiante::class, 'estudiante_id');
    }
}
