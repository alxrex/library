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

Route::get('/', function () {
    return view('index');
});



Route::get('/new', function () { return view('book/new');  });
Route::get('/edit', function () { return view('book/new');  });


//Testing
/*Route::get('/test', 'TestController@show');
Route::get('/tinsert', 'TestController@insert');
Route::get('/testview', 'TestController@view');*/