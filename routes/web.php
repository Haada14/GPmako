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

 //Route::get('/', "ProductsController@index")->middleware('auth');
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

Route::get('/Carriers/index', "CarriersContoller@index")->name('Carriers.index');

Route::resource('parcels', 'ParcelsController');

Route::get("/parcels/edit/{id}", "ParcelsController@edit")->name('editer_parcel');

Route::patch("/parcels/edit/{id}", "ParcelsController@update")->name('update_parcel');

Route::get('/Carriers/details', "CarriersContoller@details")->name('Carriers.details');

Route::get('/Carriers/contact', "CarriersContoller@contact")->name('Carriers.contact');

//Route::get('/Carriers/create', 'CarriersController@create')->name('create_carriers')->middleware('auth');

//Route::get();

Route::get('/utilisateurs.connexion', 'UtilisateursController@connexion')->name('utilisateurs.connexion');
    
Route::post('/utilisateurs.connexion', function(){
    request()->validate([
        'email' => [],
        'password' => [],
        'password_confirmation' => [],

    ]);

    $utilisateur = new App\Utilisateur;
    $utilisateur ->email = request('email');

    $utilisateur->save();

    return "bienvenue  .request('email').";
});

Route::get('/utilisateurs', function () {
    $utilisateurs = App\Utilisateur::all();

    return view('utilisateurs', [
        'utilisateurs' => $utilisateurs
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

