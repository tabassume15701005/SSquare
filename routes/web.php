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

Route::get('/', 'appController@home');
Route::get('/Home', 'appController@home');
Route::get('/circular', 'appController@circular');
Route::get('/circular/Finance&Accounts', 'appController@financeAnDaccountes');
Route::get('/circular/Programming&Testing','appController@ProgrammingAnDTesting');
Route::get('/circular/Graphics&Design', 'appController@GraphicsAnDDesign');
Route::get('/circular/Management&HR', 'appController@ManagementAnDHR');
Route::get('/circular/Planning&analysis', 'appController@PlanningAnDanalysis');