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
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/best-forex-vps', function () {
    return view('best-forex-vps');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/free-vps', function () {
    return view('free-vps');
});
Route::get('/how-forex-blogs', function () {
    return view('how-forex-blogs');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/terms-and-conditions', function () {
    return view('terms-and-conditions');
});
Route::get('/ultra-low-latency-vps', function () {
    return view('ultra-low-latency-vps');
});
Route::get('/dedicated-server', function () {
    return view('dedicated-server');
});
Route::get('/affiliate', function () {
    return view('affiliate');
});
Route::get('/best-forex-vps', function () {
    return view('best-forex-vps');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/how-forex-VPS-works-in-forex-trading', function () {
    return view('how-forex-VPS-works-in-forex-trading');
});
Route::get('/best-forex-trading-strategies-for-complete-beginners', function () {
    return view('best-forex-trading-strategies-for-complete-beginners');
});