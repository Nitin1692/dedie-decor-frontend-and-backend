<?php

use Illuminate\Support\Facades\Route;
use App\Models\Registers;
use App\Http\Controllers\registersController;
use Illuminate\Support\Facades\Auth;



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
    return view('welcome');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/experts', function(){
    return view('experts');
});

Route::get('/login', function(){
    return view('login');
});


Route::post('/login', function(){
    $registers = new Registers();
    $registers->Fullname = request('Fullname');
    $registers->Password = request('Password');
    $registers->email = request('email');
    $registers->save();
    echo '<script>alert("Account created Successfully")</script>';
});



Route::post('/authenticate', function(){
    $registers = Registers::where('email', '=', request('email'))->first();
    Auth::loginUsingId($registers->id, TRUE);
    return redirect('/');
});
