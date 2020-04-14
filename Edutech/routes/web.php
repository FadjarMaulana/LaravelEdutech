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

// Route::get('/home', function(){
//     return view('karyawan');
// });

// Route::get('/profile', function(){
//    echo "<h1>Ini halaman profile</h1>";
//    echo "<p>Data karyawan</p>";
// });

// Route::get('/home/{nama}', function($nama){
//     return "Nama kamu adalah $nama";
// });

// Route::get('/user/{id}', function($id){
//     return "Tampilan id kamu adalah = $id";
// });

// Route::get('/kontak-admin', function(){
//     return "Silahkan hubungi admin kami";
// });
// Route::redirect('/utama', '/kontak-admin');
// redirect untuk memaksa /utama untuk masuk ke /kontak-admin dulu


// route tanpa grup
// Route::get('/admin/marketing', function () {
//     return "<b>Data karyawan divisi marketing</b>";
// });

// Route::get('/admin/it', function () {
//     return "<b>Data karyawan divisi it</b>";
// });

// Route::get('/admin/hrd', function () {
//     return "<b>Data karyawan divisi hrd</b>";
// });


// Route dengan grup
// Route::prefix('admin')->group(function(){
//     Route::get('/marketing', function(){
//        echo "Ini data karyawan divisi marketing";
//     });
//     Route::get('/it', function(){
//         echo "Ini data karyawan divisi it";
//      });
//      Route::get('/hrd', function(){
//         echo "Ini data karyawan divisi hrd";
//      });
// });

// Route::get('/home', function(){
//     $home = ['karyawan', 2 => ['habib', 'aris']];
//     dd($home);
//     return $home;
// });

// Route::get('/home', function(){
//     $home = ['karyawan', 2 => ['habib', 'aris']];
//     dump($home);
//     return $home;
// });

// Route::get('/home', function(){
//     $home = ['karyawan', 2 => ['habib', 'aris']];
//     echo "<pre>";
//     print_r($home);
//     echo "</pre>";
//     die();
//     return $home;
// });

// Route::get('/karyawan', function(){
//     return view('data.karyawan', ['karyawan1' => 'Adit' , 'karyawan2' => 'Budi', 'karyawan3' => 'Ani']);
// });

// Route::get('/karyawan', function(){
//     $karyawan = ['Adit','Budi','Ani'];
//     return view('data.karyawan', ['karyawan' => $karyawan]);
// });

Route::get('/karyawan', function(){
    $karyawan = ['Adit','Budi','Ani'];
    return view('data.karyawan', compact('karyawan'));
});