<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
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

Route::get('/post/create', function () {
    DB::table('post')->insert([
        'title'=>'Lab4',
        'body'=>'INF 232'

    ]);
});

Route::get('/post', function () {
    return $post;
});





