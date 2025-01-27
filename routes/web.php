<?php

use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrutasController;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::view('/layout','child');
Route::prefix('fruteria')->group(function(){
    Route::get('/frutas',[FrutasController::class,'index'])->name('frutas');
    Route::post('/frutas',[FrutasController::class,'store'])->name('postfrutas');
    Route::get('/naranjas/{pais?}',[FrutasController::class,'naranjas'])->name('naranjas');
    Route::get('/peras/',[FrutasController::class,'peras'])->name('peras');
});



Route::get('contacto/{nombre?}/{edad?}', function ($nombre = "Taylor", $edad = 18) {
    //return "Hola, soy la página de contacto de " . $nombre . " " . $edad;
    return view('contact.contacto')->with('nom',$nombre)->with('ed',$edad)->with('frutas',array('Manzana','Pera','Naranja','Melon','Pomelo'));
})->name('contacto')->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+',
])->middleware('mayor:15');

Route::view('/componente','vista_component');
//Route::post('contacto', function(){
//    return "NO WAY JOSE";
//})->withoutMiddleware([ValidateCsrfToken::class]);