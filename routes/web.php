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

Route::get('/', ['as' => '/', 'uses' => function () {

    $cats = \App\Models\Pitomnik::query()->where(['type' => 'cat'])->count();
    $dogs = \App\Models\Pitomnik::query()->where(['type' => 'dog'])->count();
    $tortoises = \App\Models\Pitomnik::query()->where(['type' => 'tortoise'])->count();

    return view('welcome', [
        'cats' => $cats,
        'dogs' => $dogs,
        'tortoises' => $tortoises,
    ]);
}]);

Route::get('list-animals/{sort}', ['as' => 'list_animals', 'uses' => 'App\Http\Controllers\PitomnikController@list'])
    ->where(['sort' => '[id_asc,id_desc,nik_asc,nik_desc]+']);

Route::get('add-animal', ['as' => 'add_animal', 'uses' => 'App\Http\Controllers\PitomnikController@add']);
Route::post('add-animal', ['as' => 'add_animal_post', 'uses' => 'App\Http\Controllers\PitomnikController@add_post']);

Route::get('give-animal', ['as' => 'give_animal', 'uses' => 'App\Http\Controllers\PitomnikController@give']);
Route::post('give-animal', ['as' => 'give_animal_post', 'uses' => 'App\Http\Controllers\PitomnikController@give_post']);
