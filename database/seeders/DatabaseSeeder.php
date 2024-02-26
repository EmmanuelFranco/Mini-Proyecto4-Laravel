<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Docentes;
use Illuminate\Database\Seeder;
use Whoops\Run;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $docentes = new DocentesSeeder();
        $docentes -> run();

        $estudiante = new EstudianteSeeder();
        $estudiante -> run();

        $curso = new CursoSeeder();
        $curso -> run();

        $asistencia = new AsistenciaSeeder();
        $asistencia -> run();
    }
}
