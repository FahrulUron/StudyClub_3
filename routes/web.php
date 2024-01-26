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

// Route untuk mengirim judul
Route::get('/latihankirimdata', function () {
    return view ('welcome', ['title' => 'Mahasiswa Sistem Informasi']);
});

//route untuk mengirim judul sesuai url
Route::get('/latihankirimdata/{title}', function ($title) {
    return view ( 'welcome ', ['title' => $title]);
   
 });


// Route untuk menangani parameter yang diisi
Route::get('/localhost/studyclub/{nama}', function ($nama) {
   // return "Selamat datang di Study Club {$nama}";
    echo "Selamat datang di Study Club " . $nama;
});

// Route untuk menangani parameter yang dikosongkan
Route::get('/localhost/studyclub', function () {
   // return "Anda tidak memasukkan nama study club";
    echo "Anda tidak memasukkan nama Study Club ";
});

// route latihan
Route::get('/LatihanBlade', function () {
    return view('Latihan');
});

Route::get('/LatihanBlade', function () {
    return view('Latihan', ['data1' => 0]);
});


//route latihan blade home
Route::get('/LatihanBlade2', function () {
    return view('Home');
});

Route::get('/Dashboard', function () {
    return view('index');
});


//route untuk menampilkan data
use App\Models\Kategori;

Route::get('Kategori/semua', function () {
    $kategori = Kategori::all();
    foreach($kategori as $data) {
        echo $data->id . "." . $data->nama_kategori . "<br>";
    }
});

//route menambah data
Route::get('Kategori/tambah', function () {
    Kategori:: create([
        'nama_kategori'=> "Pakaian Baru",
        'deskripsi' => "Semua jenis pakaian baru"
    ]);
});

//route untuk mengupdate data
Route::get('/Kategori/update/{id}', function ($id) {
    Kategori:: find($id)->update([
        'nama_kategori'=> "Pakaian Anak",
        'deskripsi' => "Semua jenis pakaian anak"
    ]);
});

//route untuk menghapus data
Route::get('/Kategori/hapus/{id}', function ($id) {
    Kategori:: find($id)->delete();
});

//route controller
Use App\Http\Controllers\KategoriController;

Route::resource('kategori', KategoriController::class);
