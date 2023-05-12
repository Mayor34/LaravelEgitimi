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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ornek', function (){
    return "Bu bir örnektir";
});

Route::get('/api/v1/ornek',function (){
    return ['Ornek'=>'Bu bir ornektir'];
});

Route::get('/urun/{urunadi}/{id?}', function ($urunadi,$id=0){
    return "Ürün Adı: $id $urunadi";
})->name("ornek_1");

Route::get("/ornek1", function () {
    return redirect()->route("ornek_1", ["urunadi"=>"elma", "id"=>5]);
});
