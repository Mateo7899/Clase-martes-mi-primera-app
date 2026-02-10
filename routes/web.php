<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mi-ruta-app', function () {

    echo "<h1> Variables...</h1>";
    $nombre = "samuel redondo";
    echo $nombre;
    $age = 20;
    echo $age;

});

function printUser(string $name, int $age){
    return "$name tiene $age años";

}


Route::get('/php basico', function () {
    return ('hola esta es mi ruta');
});
