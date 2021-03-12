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

Route::get('/products/{id?}', function($id=null) {
    $array = config('pasta');
    if(empty($id) || $id == count($array) + 1){
     return redirect('/');
    }
    return view('products',
        ['idProduct' => $id],
        ['array'=> $array ]);
});

