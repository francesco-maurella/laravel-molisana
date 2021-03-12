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
    $pasta = config('pasta');
    return view('home.home',
    ['pastaList' => $pasta]
  );
});

Route::get('products/{id}', function ($id) {
    $pasta = config('pasta');
    return view('products.product',
    [
      'idProduct' => $id,
      'pastaList' => $pasta
    ]
  );
});
