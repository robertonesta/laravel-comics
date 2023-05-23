<?php

use Dflydev\DotAccessData\Data;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\CharacterStream;

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
    $data = array
    (
        'links' => [
        'characters' => 'characters',
        'comics' => 'comics',
        'movies' => 'movies',
        'tv' => 'tv',
        'games' => 'games',
        'collectibles' => 'collectibles',
        'videos' => 'videos',
        'fans' => 'fans',
        'news' => 'news',
        'shop' =>'shop',
    ]);
    return view('home', $data);
})->name("homepage");
