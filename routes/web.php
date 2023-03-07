<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/person', function () {
    return view('person', [
        'name' => 'Vince S. Pasco',
        'age' => 22,
        'address' => 'Nabua',
        'color' => 'blue',
        'siblings' => [
        [
            'name' => 'Ann',
            'age' => 14 
        ], 
        [
            'name' => 'July',
            'age' => 40
        ], 
        [
            'name' => 'Kath',
            'age' => 22
        ], 
        [
            'name' => 'Poseidon',
            'age' => 17
        ], 
        [
            'name' => 'Kim',
            'age' => 11
        ], 
    ]
    ]);
});