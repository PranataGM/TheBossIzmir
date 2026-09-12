<?php

use App\Models\Gallery;
use App\Models\MenuCategory;
use App\Models\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $galleries = Gallery::where('is_visible', true)->orderBy('sort_order')->take(10)->get();
    $settings = Setting::pluck('value', 'key');
    $categories = MenuCategory::where('is_active', true)
        ->orderBy('sort_order')
        ->with(['items' => function ($query) {
            $query->where('is_active', true)->take(4); // limit items on home page
        }])
        ->take(3) // limit categories on home page
        ->get();
    return view('home', compact('galleries', 'settings', 'categories'));
})->name('home');

Route::get('/menu', function () {
    $categories = MenuCategory::where('is_active', true)
        ->orderBy('sort_order')
        ->with(['items' => function ($query) {
            $query->where('is_active', true);
        }])
        ->get();
    return view('menu', compact('categories'));
})->name('menu');
