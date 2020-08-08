<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/', function (){
    $products = \App\Product::orderBy('id','desc')->get();
   return view('product.index',[
       'products' => $products
   ]);
})->name('home');


Route::get('/add',function (){
    return view('product.create');
})->name('add');
Route::post('/add',function (Request $request){
    DB::insert('insert into products(name,description,price) values (?,?,?)',[$request->name,$request->description,$request->price]);
    return redirect()->back();
});

Route::get('/edit',function (){
    return view('product.update');
})->name('edit');

Route::post('/edit/{id}',function (Request $request,$id){
    $product = \App\Product::find($id)->get();
    dd($product->all());
    return view('product.index');
});

//Route::post('/edit/',function (Request $request,$id){
//   dd($request->all());
//});

//Route::post('/edit',function (Request $request,$id){
//    $data = array();
//    $data['name'] = $request->name;
//    $data['price'] = $request->price;
//    $data['description'] = $request->description;
//    \App\Product::where('id', $id)->update($data);
//});

//Route::get('/find',function (){
////
//});
//
//Route::get('/delete/{id}',function (Request $request){
////
//});


