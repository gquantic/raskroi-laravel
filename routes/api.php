<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Services\WooCommerce\WooCatalogueService;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function (Request $request) {
    $woo = new WooCatalogueService();
    $products = $woo->getProducts();
    return 'ok';
});
