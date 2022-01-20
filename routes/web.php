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
    $data = [
        'name' => 'Francesco',
        'lastname' => 'Lucco',
    ];
    return view('home', $data);
})->name('home');
Route::get('/giochi', function () {
    $data = [
        'lista' => 'Lista dei giochi in vendita:',
        'giochiToBuy'=> [
            "Ratchet & Clank: Rift Apart",
            "Marvel's Spider-Man: Miles Morales",
            "Returnal",
            "It Takes Two",
            "Astro's Playroom",
            "Ghost of Tsushima: Director's Cut",
            "Final Fantasy VII Remake Intergrade",
            "Death Stranding Director's Cut",
        ],
        'costo'=> [
            199.90,
            249.99,
            59.99,
            340.00,
            269.99,
            49.99,
            99.99,
            29.50,
        ],
    ];
    return view('giochi', $data);
})->name('giochi');
Route::get('/acquisti', function () {
    $data = [
        "message" => 'Non ci sono giochi in vendida. Le prossime scorte arriveranno all inizio di febbraio. Ci scusiamo per il disagio.'
    ];
    return view('acquisti', $data);
})->name('acquisti');
Route::get('/hardware', function () {
    return view('hardware');
})->name('hardware');
Route::get('/novità', function () {
    $data = [
        'nuove_uscite' => [
            'Cyberpunk 2077',
            'Ghostwire Tokyo',
            'Stray',
            'War Warhammer III',
            'Yu-Gi-Oh!' 
        ]
    ];
    return view('novità', $data);
})->name('novità');
Route::get('/servizi', function () {
    return view('servizi');
})->name('servizi');
Route::get('/supporto', function () {
    return view('supporto');
})->name('supporto');
