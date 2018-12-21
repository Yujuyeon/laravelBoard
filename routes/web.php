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

Route::get('/', function()
{
    return view('welcome');
});
// Route::get('/', 'MainController@index');
    // $greeting = 'hello';
    // return view('index')->with
    // ([
    //     'greeting'=> $greeting,
    //     'name' => 'johnyy'
    // ]);
    // return view('index');

Route::post('quizs', 'quizController@store');
Route::get('submitQuiz', function()
{
    return view('submitQuiz');
});

Route::get('manageQuiz','quizController@select');
// Route::get('manageQuiz', function()
// {
//     return view('manageQuiz');
// });

Route::get('vod', function()
{
    return view('vod');
});

// Route::get('watchQuiz', function()
// {
//     return view('watch');
// });
// Route::get('manageQuiz', 'quizController@select');
Route::get('watchShow', function()
{
    return view('watchShow');
});

// Route::get('quiz', 'quizController@store');