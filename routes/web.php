<?php

use App\Models\Category;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Service;
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
    $services = Service::all();
    $recentsPosts = Post::inRandomOrder()->limit(3)->get();

    return view('home')->with(['services' => $services,'recentsPosts' => $recentsPosts]);
})->name('home');

Route::get('/about', function () {
    $services = Service::all();

    return view('about')->with(['services' => $services]);
})->name('about');


Route::get('/faq', function () {
    $services = Service::all();

    return view('faq')->with(['services' => $services]);
})->name('faq');

Route::get('/about-logo', function () {
    $services = Service::all();

    return view('logo')->with(['services' => $services]);
})->name('about.logo');


Route::get('/service/{service?}', function () {
    $services = Service::all();
    $service = Service::where('name',request('service'))->first();
    $photos = Photo::where('service_id',$service->id)->simplePaginate(6);

    return view('service')->with(['services' => $services,'service' => $service,'photos' => $photos]);
})->name('service');

Route::get('/gallery', function () {
    $photos = Photo::inRandomOrder()->simplePaginate(12);
    $services = Service::all();

    return view('gallery')->with(['services' => $services,'photos' => $photos]);
})->name('gallery');

Route::get('/contact', function () {
    $services = Service::all();
    return view('contact')->with(['services' => $services]);
})->name('contact');

Route::get('/posts', function () {
    $services = Service::all();
    $posts = Post::orderBy('created_at','desc')->simplePaginate(6);
    $recentsPosts = Post::inRandomOrder()->limit(4)->get();

    $categories = Category::all();

    return view('posts')->with(['services' => $services,'posts' => $posts,'categories' => $categories,'recentsPosts' => $recentsPosts]);
})->name('posts');

Route::get('/post/{title?}/{id?}', function () {
    $services = Service::all();
    $post = Post::where('id',request('id'))->where('title',request('title'))->first();
    $recentsPosts = Post::inRandomOrder()->limit(4)->get();

    $categories = Category::all();

    return view('post')->with(['services' => $services,'post' => $post,'categories' => $categories,'recentsPosts' => $recentsPosts]);
})->name('post');
