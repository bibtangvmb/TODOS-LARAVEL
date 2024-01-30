<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\KategoriController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);



Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);
Route::get('/kategori/{id}/delete', [KategoriController::class, 'delete']);
Route::get('/kategori/{id}/save', [KategoriController::class, 'save']);













































































// Route::get('/umursaya', function () {
//     return view('umur');
// });

// Route::get('/hobi', function () {
//     return view('hallo',['nama'=>'IK2','alamat'=>'jl.thamrin 35A','tittle'=>'hallo']);
// });

// Route::get('/login', function () {
//    $nama = 'Bintang';

//    $lampu = 1; //0 = lampu mati,1 = lampu nyala

//    $nilai = "B";

//    $perulangan_for = 100;

//    $hobi_banyak = [
//             'Bermain Sapi',
//             'Bermain Anjing',
//             'Bermain Ular',
//             'Bermain Kucing',
//             'Bermain Kambing',
//             'Membaca',
//             'Memancing',
//    ];

//    return view('admin.login',[
//         'nama' => $nama,
//         'kelas' => $kelas,
//         'lampu' => $lampu,
//         'nilai' => $nilai,
//         'limit' => $perulangan_for,
//         'hobbies' => $hobi_banyak,
//    ]);    
// });
