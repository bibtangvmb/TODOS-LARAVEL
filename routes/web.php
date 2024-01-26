<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/add', [HomeController::class, 'tambah']);

Route::post('/save', [HomeController::class, 'simpan']);



Route::post('/makanan', [HomeController::class, 'view_makanan']);


Route::post('/test_query_builder', [HomeController::class, 'test_query_builder']);
Route::post('/test_eloquent', [HomeController::class, 'test_eloquent']);









































































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