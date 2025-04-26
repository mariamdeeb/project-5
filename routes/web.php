<?php

/*use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SecondController;
use App\Http\Controllers\Front\UserController\Front;
use App\Http\Controller;

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
    $data=[];
    $data['id']=4;
    $data['name']='mariam deeb';
    return view('welcome',$data) ;
});

Route::get('index','App\Http\Controllers\Front\UserController@getindex');

Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/show-number/{id}', function ($id) {
    return $id;
}) ->name('a');

Route::get('/show-string/{id?}', function () {
    return 'welcome';
}) ->name('b');

Route::group(['namespace' => 'Admin'],function(){
    Route::get('second',[App\Http\Controllers\Admin\SecondController::class, 'showString0']) -> middleware('auth');
    Route::get('second2',[App\Http\Controllers\Admin\SecondController::class, 'showString1']);
    Route::get('second3',[App\Http\Controllers\Admin\SecondController::class, 'showString2']);
    Route::get('second4',[App\Http\Controllers\Admin\SecondController::class, 'showString3']);
});

Route::get('login',function(){
    return 'must be login to access this route';
})->name('login');

Route::resource('news','App\Http\Controllers\NewsController');
/*Route::group(['prefix'=>'users','middleware'=>'auth'],function(){
    Route::get('/',function(){
        return 'work';
    });
    Route::get('show','UserController@showUserName');
    Route::delete('delete','UserController@showUserName');
    Route::get('edit','UserController@showUserName');
    Route::put('update','UserController@showUserName');

});

Route::get('check',function(){
    return 'middleware';
}) ->middleware('auth');


Route::namespace('Front')->group(function(){
    Route::get('a',[App\Http\Controllers\Front\UserController::class ,'showUserName']);
});


Route::get('second', [App\Http\Controllers\Admin\SecondController::class, 'showString']);*/
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/',function(){
    return 'Home';
});

Route::get('/dashboard',function(){
    return 'dashboard';
});

