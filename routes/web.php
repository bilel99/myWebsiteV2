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


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| BACKS OFFICES
|
*/
// Dashboard
Route::get('/dashboard', ['as' => 'admin.dashboard', 'uses' => 'Admin\DashboardController@index']);
// User
Route::resource('/dashboard/user', 'Admin\UserController', ['only' => ['index', 'show', 'edit', 'update', 'destroy']]);
// Home-page
Route::resource('/dashboard/homePage', 'Admin\HomePageController');
// Rôle User
Route::resource('/dashboard/roleUser', 'Admin\RoleUserController', ['only' => ['index', 'update']]);
// Phrase Culte
Route::resource('/dashboard/phraseculte', 'Admin\PhraseculteController');
// Témoignage
Route::resource('/dashboard/temoignage', 'Admin\TemoignageController');
// CGU
Route::resource('/dashboard/cgu', 'Admin\CguController', ['only' => ['index', 'edit', 'update', 'show']]);
// Langue
Route::resource('/dashboard/langue', 'Admin\LangueController', ['only' => ['index', 'edit', 'update']]);
// Contact
Route::resource('/dashboard/contact', 'Admin\ContactController', ['only' => ['index', 'show', 'destroy']]);
Route::put('/dashboard/contact/done/{contact}', ['as' => 'contact.done', 'uses' => 'Admin\ContactController@done']);
// Portfolios
Route::resource('/dashboard/portfolios', 'Admin\PortfoliosController');
// CV
Route::resource('/dashboard/cv', 'Admin\CvController');
// Formation
Route::resource('/dashboard/formation', 'Admin\FormationController');
// Groupe compétence
Route::resource('/dashboard/groupecompetence', 'Admin\GroupeCompetenceController');
// Compétence
Route::post('/dashboard/competence/store_group', ['as' => 'admin.store_group', 'uses' => 'Admin\CompetenceController@storeGroup']);
Route::delete('/dashboard/competence/destroy_group/{destroyGroup}', ['as' => 'admin.destroy_group', 'uses' => 'Admin\CompetenceController@destroyGroup']);
Route::resource('/dashboard/competence', 'Admin\CompetenceController');
// Expérience
Route::resource('/dashboard/experience', 'Admin\ExperienceController');
// Compétence Luiguistique
Route::resource('/dashboard/competenceluiguistique', 'Admin\CompetenceLuiguistiqueController');
// Intéret loisir
Route::resource('/dashboard/InteretLoisir', 'Admin\InteretloisirController');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| FRONT OFFICES
|
*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|  Authentification
|
*/
Auth::routes();



Route::get('/', function () {
    return view('welcome');
});
