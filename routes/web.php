<?php

use App\Http\Requests\CreateCouponRequest;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/coupons', function (CreateCouponRequest $request) {
    return $request->validated();
});

