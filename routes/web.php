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
//predere l'array della pasta dalla config pasta.php e inviarlo al template



// ESEMPIO DI REDIRECT
// -----------------------------------
// Route::get('/',function(){
//     return redirect('/home');
// });
//-----------------------------------


Route::get('/', function () {
    $array = config('pasta');
    return view('home' ,[
        'array'=> $array
    ]);
});

Route::get('/products/{id?}', function($id = null) {
    $array = config('pasta');
    switch ($id) {
        case $id === 0:
            return redirect('/products/12');
            break;
        case $id == count($array) + 1:
            return redirect('/products/1');
            break;
        case $id > count($array) + 1:  
            return abort(404);        
        default:
            return view('products',
                ['idProduct' => $id],
                ['array'=> $array ]);
            break;
    }
    
});

