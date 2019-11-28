<?php

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
//Pour demarrer le serveur 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/produits', function () {
    return "je suis la oiiii";
});


Route::get('/produits/{id}', function ($id){
    return "je suis le produit $id";
});

Route::get('/categories', "CategoriesController@index");

Route::get("/categories/{id}", "CategoriesController@show");

Route::get("/", "HomeController@index");

Route::get("/Colis/{id}", "DEtailsController@show");

    