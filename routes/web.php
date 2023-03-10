<?php

use App\Models\Category;
use App\Models\Contact;
use App\Models\Don;
use App\Models\Membre;
use App\Models\Partner;
use App\Models\Photo;
use App\Models\Post;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testmony;
use Illuminate\Support\Facades\Route;
use Nnjeim\World\World;

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
    $partners = Partner::all();
    $testmonies = Testmony::all();


    return view('home')->with(['services' => $services,'recentsPosts' => $recentsPosts,'partners' => $partners,'testmonies' => $testmonies]);
})->name('home');

Route::get('/about', function () {
    $services = Service::all();
    $teams = Team::inRandomOrder()->where('status','actif')->limit(4)->get();
    $partners = Partner::all();


    return view('about')->with(['services' => $services,'teams' => $teams,'partners' => $partners]);
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


Route::get('/contact', function () {
    $services = Service::all();


    return view('contact')->with(['services' => $services]);
})->name('contact');

Route::post('/contact',function (Contact $contact){
    // $contact =  Contact::class;
    $contact->fill(request()->input())->save();

    return back()->with('success', 'Merci de nous avoir contact?? !');


});

Route::get('/become-member', function () {

    $action =  World::countries();
    // $action2 =  World::currencies();


    if ($action->success) {
        $countries = $action->data;
        // foreach ($countries as $key => $value) {
        //     dd($value['name']);
        // }
        // dd($countries);
    }
    $services = Service::all();

    return view('become-member')->with(['services' => $services,'countries' => $countries]);
})->name('become.member');

Route::post('/become-member', function (Membre $membre) {

    $membre->fill(request()->input())->save();
    $titre = request()->input('genre') == 'F??minin' ? 'Ch??re' : 'Cher';
    $nom = ucwords(request()->input('prenom').' '.request()->input('nom'));

    return back()->with('success', "Votre demande d\'adh??sion a ??t?? soumis avec succ??s !, $titre $nom");

})->name('become.member');


Route::get('/don', function () {
    $action =  World::countries();
    // $action2 =  World::currencies();


    if ($action->success) {
        $countries = $action->data;
        // foreach ($countries as $key => $value) {
        //     dd($value['name']);
        // }
        // dd($countries);
    }


    $services = Service::all();

    return view('don')->with(['services' => $services,'countries' => $countries]);
})->name('don');

Route::post('don', function (Don $don) {

    $don->fill(request()->input())->save();
    $titre = ucwords(request()->input('titre'));
    $nom = ucwords(request()->input('prenom').' '.request()->input('nom'));

    return back()->with("success", "Nous vous remercions $titre $nom, votre intention de donation a ??t?? prise en compte. Nous vous contacterons pour la proc??dure de donation.");

});
