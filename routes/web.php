<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get("/",[MainController::class, "proyectos.index"])->name("main");

// proteger las rutas con middelware, para evitar entrar sin logearse
Route::view("proyectos","proyectos.proyectos")->name("proyectos")
    ->middleware("auth");

//para rutas de tablas y tener rutas de tablas php artisan route:list veremos las de alumnos
//las necesitamos para gestionar alumnos tablas y todo eso
Route::resource("alumnos",\App\Http\Controllers\AlumnoController::class)
    ->middleware("auth");


Route::get('/index', function (){
    return view("proyectos.index");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get("/",function (){
    return view("proyectos.index");
});

Route::get("about",function (){
    return view("proyectos.about");
});
