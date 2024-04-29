<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // llamaa a la clase alumno y factoria lo ejecutas 50 veces y lo creas
        // y asi creamos 50 alumnos fake a la bd
        //esto es un for each, pero mas simplificado
        Alumno::factory(30)->create();

        // comando para ejecutar migraciones borrando lo que hay
        // php artisan migrate:fresh --seed
    }


}
