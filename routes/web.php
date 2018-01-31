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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function(){
  $nome = 'Nome';
  //array ou usar o compact
  //return view('ola', ['nome'=> $nome]);
  return view('ola', compact('nome'));
});
/*
Route::get('/cursos', function(){
  $cursos = ['TDD', 'BDD', 'Scrum', 'Spring MVC'];
  return view('cursos', compact('cursos'));
});
*/
Route::get('/cursos', 'CursosController@index');
