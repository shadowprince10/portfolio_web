<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Menu:
1. Home
2. About Me
3. Portfolio
4. Work/Volunteer Experiences
5. Certifications
6. Skills
7. Contacts
*/

Route::get('/', [HomeController::class, 'index']) -> name('home');
/*
Route::get('/', function() {
    return view('home');
}) -> name('home');
*/
Route::get('/about', [AboutMeController::class, 'index']) -> name('about');
Route::get('/contact', [ContactController::class, 'index']) -> name('contact');
Route::get('/projects', [ProjectController::class, 'index']) -> name('projects');
Route::resource('projects', ProjectController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('certifications', CertificationController::class);


/*
References:
- https://youtu.be/S9NOXjdipl4
- https://www.w3schools.com/howto/howto_js_toggle_dark_mode.asp
- https://www.youtube.com/watch?v=sU-uzO7nNhI&list=WL&index=23
- https://www.youtube.com/watch?v=aE6Nc3CQ5Ko&list=WL&index=10&t=302s
- https://www.youtube.com/watch?v=I4TLliD5IRc
- https://www.youtube.com/watch?v=RroDdybvu5s&list=WL&index=33&pp=gAQBiAQB
- https://www.geeksforgeeks.org/how-to-create-dark-light-mode-for-website-using-javascript-jquery/
- https://www.w3schools.com/cssref/pr_padding.php
- https://boxicons.com/usage
- https://discuss.codecademy.com/t/can-you-apply-multiple-stylesheets-to-a-single-page/369792
- https://www.w3schools.com/icons/tryit.asp?filename=tryicons_fa-linkedin
- https://www.w3schools.com/howto/howto_css_image_center.asp
- https://www.w3schools.com/html/html_forms.asp
- https://www.youtube.com/watch?v=KZgMh-CDpa4
- https://www.youtube.com/watch?v=2HdNwGUBGF4&list=WL&index=5
- https://www.rapidtables.com/web/color/purple-color.html
- https://www.tutorialspoint.com/css/css_positioning.htm
*/

