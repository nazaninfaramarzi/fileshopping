<?php
use App\Model\Comments;
use App\User;
use App\Rolws;

use Carbon\
carbon;
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

Route::view('/', 'welcome', ['name' => '']);

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::view('/about', 'about');
Route::view('/single-blog', 'single-blog');
Route::view('/product_list', 'product_list');
Route::view('/single-product', 'single-product');
Route::view('/elements', 'elements');
Route::view('/contact', 'contact');
Route::view('/confirmation', 'confirmation');
Route::view('/checkout', 'checkout');
Route::view('/cart', 'cart');







Route::get('/date', function (){
    $date=new DateTime('+1 year -1 week');
    return $date->format('d-m-Y h:i:m');
});

Route::get('/carbon', function(){
    
    $carbon = Carbon::now()->addDay(+1);
    return $carbon->diffForHumans();

});

Route::get('/attributes' , function(){

    $comment=Comments::findOrFail(2);
    return $comment->commenttext; 
});

Route::resource('/comment', 'CommentsController');

