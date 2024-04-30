<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\Pagina1Controller;
use App\Http\Controllers\Pagina2Controller;
use App\Http\Controllers\Pagina3Controller;
use App\Http\Controllers\Pagina4Controller;
use App\Http\Controllers\Pagina5Controller;



Route::get('/', function() {
    return view('welcome');
});
///
Route::get("/pagina1",[Pagina1Controller::class, 'pagina1']);
///
route::get("/pagina2", [Pagina2Controller::class, 'pagina2']);
///
route::get("/pagina3", [Pagina3Controller::class, 'pagina3']);
///
route::get("/pagina4", [Pagina4Controller::class, 'pagina4']);
///
route::get("/pagina5", [Pagina5Controller::class, 'pagina5']);