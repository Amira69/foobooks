<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
  Route::get('/', function () {
       #return view('welcome');
       return 'Laravel 5';
   });
   Route::get('/books', 'BookController@getIndex');
   Route::get('/book/create', 'BookController@getCreate');
   Route::post('/book/create', 'BookController@postCreate');
   Route::get('/book/show/{title?}', 'BookController@getShow');
   Route::get('/practice', function() {

    $data = Array('foo' => 'bar');
    Debugbar::info($data);
    Debugbar::error('Error!');
    Debugbar::warning('Watch out…');
    Debugbar::addMessage('Another message', 'mylabel');

    return 'Practice';

});

Route::get('/practice', function() {

    $random = new Rych\Random\Random();
    return $random->getRandomString(8);

});
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('/lorem', 'ParGenController@getGenerate');
Route::get('/faker', 'ProfGenController@getProfile');
/*
   Route::get('/practice', function() {
       $random = new Random();
       return $random->getRandomString(10);
   }); */

    //
});
