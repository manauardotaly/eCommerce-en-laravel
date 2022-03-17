<?php
use Illuminate\Support\Facades\Route;
use App\job;
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

//Dashboard
//login
//oute::get('admin', 'loginController@adminIndex')->name('admin.login');

Route::get('/', function () {
    return view('login');
});



Route::get('/get-data', function(){
    $data = job::all();

    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
    // $data1 = compact('data');
    // return view('getdata')->with($data1);
});
