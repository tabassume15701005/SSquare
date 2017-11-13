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
Route::get('/Home', 'appController@home<?php

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

Route::get('/', 'appController@getHomePage');
Route::get('/home', 'appController@home');
Route::get('/circular', 'appController@circular');
Route::get('/circular/ViewCircular/Finance&Accounts', 'appController@financeAnDaccountes');
Route::get('/circular/ViewCircular/Programming&Testing','appController@ProgrammingAnDTesting');
Route::get('/circular/ViewCircular/Graphics&Design', 'appController@GraphicsAnDDesign');
Route::get('/circular/ViewCircular/Management&HR', 'appController@ManagementAnDHR');
Route::get('/circular/ViewCircular/Planning&analysis', 'appController@PlanningAnDanalysis');
Route::get('/circular/ViewCircular', 'appController@ViewCircular');
Route::get('/circular/ViewCircular/Apply', 'appController@apply');
Route::get('/welcome' , function()
           {
               return view('welcome');
           });
Auth::routes();
Route::get('/circular/ViewCircular/Finamce&accpuntCV', 'appController@FinamceANDaccpuntCV');
Route::get('/circular/ViewCircular/Graphics&designingCV', 'appController@GraphicsANDdesigningCV');
Route::get('/circular/ViewCircular/Management&HRCV', 'appController@ManagementANDHRCV');
Route::get('/circular/ViewCircular/Planning&analysisCV', 'appController@PlanningANDanalysis');
Route::get('/circular/ViewCircular/Programming&testingCV', 'appController@ProgrammingANDtestingCV');
Route::post('/cv', ['uses'=>'cvController@postCv' , 'as'=>'cv']);

Route::get('/submit', ['uses'=>'CvController@getShow', 'as'=>'submit']);

Auth::routes();

Route::get('/admin', 'AdminController@index');
Route::get('/homepage', ['uses'=>'appController@getHomePage', 'as'=>'homepage']);
');
Route::get('/circular', 'appController@circular');
Route::get('/circular/Finance&Accounts', 'appController@financeAnDaccountes');
Route::get('/circular/Programming&Testing','appController@ProgrammingAnDTesting');
Route::get('/circular/Graphics&Design', 'appController@GraphicsAnDDesign');
Route::get('/circular/Management&HR', 'appController@ManagementAnDHR');
Route::get('/circular/Planning&analysis', 'appController@PlanningAnDanalysis');
