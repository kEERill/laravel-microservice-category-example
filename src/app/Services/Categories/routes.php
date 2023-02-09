<?php

use App\Services\Categories\Interfaces\Http\Controller\CategoriesController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1/categories')
    ->group(function () {
        Route::get('{categoryId}', [CategoriesController::class, 'get']);
    });
