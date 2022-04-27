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
Route::get('artisan/{command}', function ($command){
    $text = '';
    foreach (explode('|', $command) as $item){
        $text .= ' '.$item;
    }
//    dd($text);
   \Artisan::call($text);
});

Route::get('/', function () {
    $display = 'home';
    if (session()->get('locale') == '') {
        session()->put('locale', 'ru');
        app()->setLocale('ru');
    } else {
        app()->setLocale(session()->get('locale'));
    }
    $lan = session()->get('locale');
    return view('welcome', ['lan'=>$lan, 'display'=>$display]);
});

Route::get('/languages/{loc}', function ($loc) {
    if (in_array($loc, ['ru', 'uz', 'en'])) {
        session()->put('locale', $loc);
    }
    return redirect()->back();
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $display = 'home';
    return view('dashboard', ['display'=>$display]);
})->name('dashboard');

Route::get('/profile', function (){
    $display = '';
    return view('profile.show', ['display' => $display]);
});

Route::get('/agency', function (){
    $display = 'agency';
    return view('agency.index', compact('display'));
});
Route::get('/contacts', function (){
    $contact = 1;
    $display = 'contact';
    return view('contact.index', ['contact' => $contact, 'display' => $display]);
});
Route::get('/services', function (){
    $display = 'service';
    return view('services.index', compact('display'));
});

Route::resources([
    'users' => \App\Http\Controllers\UserController::class,
    'projects' => \App\Http\Controllers\ProjectController::class,
    'project_categories' => \App\Http\Controllers\ProjectCategoryController::class,
    'clients' => \App\Http\Controllers\ClientsController::class,
    'reviews' => \App\Http\Controllers\ReviewsController::class,
    'feedback' => \App\Http\Controllers\FeedbackController::class,
    'words' => \App\Http\Controllers\WordsController::class,
    'seo' => \App\Http\Controllers\SeoController::class,
]);


