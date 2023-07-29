<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('enable', function() {


    // $data = Category::with('products')->get();
    // $data = Product::all();
    // $data = Product::max('price');


    // $data = Category::with(['products' => function($query){
    //     $query -> where ('title', 'like', 'a%');              // a هيك بجيب مع شرط يكون اول حرف
    // }])->get();

    // $data = Category::has('products', ">=", 1)->get();                 // product الها category بجيب كل


    // $data = Category::whereHas('products', function($query) {
    //     $query -> where('title', 'like', 'a%');                  // نفس الي قبلها بس مع شرط
    // }, ">=", 1)->get();


    // $data = Category::whereHas('products', function($query) {
    //     $query -> where('title', 'like', 'a%');                       // مع شرط product هادي عكس الي قبل بتجيب الي ما فيها
    // }, "<", 1)->get();


    // $data = Category::whereDoesntHave('products', function ($query) {
    //     $query -> where('price', '>', 60);                            // هادي بتجيب كل منتج سعره اقل من 60
    // })->get();

    // $data = Category::doesntHave('products')->get();                  // يعني بدي كل فئة ما فيها منتجات
    // $data = Category::has('products','<',1)->get();                   // هادي نفس الي فوقها بس بطريقة تانية


    // Belongs To Many  -->  متعدد لمتعدد
    // التالي امثلة من الفيديو الاول في المجلد السادس في الدقيقة 20

    // $data = Product::with('orders')->find(1);       // تبعه يساوي 1 id الي product تابع ل order هيك انا قلتله بدي كل

    // $data = Category::with('products')->find(1);




    return response()->json(['data' => $data]);

});




