<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;

Route::prefix('conversion')->group(function () {
    Route::get('/', [ConversionController::class, 'index'])->name('conversion.index');
    $categories = config('conversion.categories', []);

    foreach ($categories as $category) {
        $categorySlug = $category['slug'] ?? null;
        $tools = $category['tools'] ?? [];

        if (!is_string($categorySlug) || $categorySlug === '' || !is_array($tools)) {
            continue;
        }

        foreach ($tools as $tool) {
            $toolSlug = $tool['slug'] ?? null;
            $routeName = $tool['route_name'] ?? null;
            $toolKey = $tool['key'] ?? null;

            if (!is_string($toolSlug) || $toolSlug === '' || !is_string($routeName) || $routeName === '' || !is_string($toolKey) || $toolKey === '') {
                continue;
            }

            Route::get("/{$categorySlug}/{$toolSlug}", [ConversionController::class, 'show'])
                ->defaults('calculator', $toolKey)
                ->name($routeName);
        }
    }
});

Route::get('/', function () {
    return view('welcome');
});