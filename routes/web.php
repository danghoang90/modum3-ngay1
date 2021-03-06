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

//Route::get('/laravelPro/{name?}', function ($name=null) {
//    if ($name) {
//    echo 'Hello' . $name . '!';
//    } else {
//        echo 'Hello World';
//    }
//});
//
//Route::get('/login', function () {
//    return view('login');
//});
//
//Route::post('/login', function (Illuminate\Http\Request $request) {
//    if ($request->username == 'admin'
//        && $request->password == 'admin') {
//        return view('welcome_admin');
//    }
//    return view('login_error');
//});

Route::get('/', function () {
        return view('calculator');
});

Route::post('/calculator', function (Illuminate\Http\Request $request) {
    $description = $request->description;
    $price = $request->price;
    $percent = $request->percent;
    $discountAmount = $price * $percent * 0.01;
    $discountPrice = $price - $discountAmount;
    return view('display', compact(['description','percent','price', 'discountAmount','discountPrice']));
});

Route::get('/dictionary', function () {
    return view('dictionary');
});

Route::post('/result', function (Illuminate\Http\Request $request) {
   $word = $request->word;
   $array = [
     'family' => 'Gia đình',
     'love' => 'Tình Yêu',
     'developer' => 'Lập  Viên'
   ];
   foreach ($array as $key => $mean) {
       if ($key == $word) {
           return view('result', compact(['word','mean']));
       }
   }
   return view('error');
});
