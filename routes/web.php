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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('store/question','QuestionController@store')->name('question.add');
Route::get('list/question','QuestionController@getall')->name('question.list');
Route::get('/','QuestionController@questionrandom')->name('question.random');
Route::get('question','QuestionController@question')->name('question');
Route::get('edit/{question}/question','QuestionController@edit')->name('question.edit');
Route::post('update/{question}/question','QuestionController@update')->name('question.update');