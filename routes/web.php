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

//route basic
Route::get('tentang', function () {
    return "<h1>Hello</h1>"
    ."selamat datang di webapp saya<br>"
    ."Laravel emang keren";
});

Route::get('saya', function () {
    // me-return view ke file yang bernama 'profile'
    // di folder 'resources/views'
    $mamat = "Mamat Abdullah";
    return view('profile', compact('mamat'));
});

Route::get('suho', function () {
    // me-return view ke file yang bernama 'profile'
    // di folder 'resources/views'
    $nama = "suho";
    $ttl= "22 Mei 1991";
    $umur="30 tahun";
    $tinggibadan= "172 cm";
    $alamat= "Seoul,Korea selatan<br>";
    return view('profile', compact('nama','ttl','umur','tinggibadan','alamat'));
});

Route::get('xiumin', function () {
    // me-return view ke file yang bernama 'profile'
    // di folder 'resources/views'
    $nama = "xiumin";
    $ttl= "26 maret 1990";
    $umur= "31 tahun";
    $tinggibadan= "173 cm";
    $alamat="Gyeonggi";
    return view('profile', compact('nama','ttl','umur','tinggibadan','alamat'));
});

Route::get('chanyeoul', function () {
    // me-return view ke file yang bernama 'profile'
    // di folder 'resources/views'
    $nama = "chanyeoul";
    $ttl= "27 november 1992";
    $umur= "29 tahun";
    $tinggibadan= "186 cm";
    $alamat= "Seoul,Korea selatan";
    return view('profile', compact('nama','ttl','umur','tinggibadan','alamat'));
});

Route::get('tasya', function () {
    // me-return view ke file yang bernama 'profile'
    // di folder 'resources/views'
    $nama = "tasya";
    $ttl= "15 mei 2003";
    $umur= "18 tahun";
    $tinggibadan= "156 cm";
    $alamat= "Cibiru,Jawa Barat";
    return view('profile', compact('nama','ttl','umur','tinggibadan','alamat'));
});

Route::get('marsya', function () {
    // me-return view ke file yang bernama 'profile'
    // di folder 'resources/views'
    $nama = "marsya";
    $ttl= "18 Juli 2003";
    $umur= "18 tahun";
    $tinggibadan= "165 cm";
    $alamat= "Karawang,Jawa Barat";
    return view('profile', compact('nama','ttl','umur','tinggibadan','alamat'));
});


//jalankan server laravel -> php artisan serve
//akses localhost:8000/tentang


//Route Parameter
Route::get('posting/{id}', function ($a) {
    return "Halaman Posting ke - <b>$a</b>";
});

//Route parameter biodata
Route::get('biodata/{nama}/{alamat}/{jk}/{tb}/{bb}', function ($nama,$alamat,$jk,$tb,$bb) {
    return view('bio', compact('nama','alamat','jk','tb','bb'));
});

//Route Optional Parameter
Route::get('post/{id?}', function ($a = 2) {
    return "Halaman Posting ke - <b>$a</b>";
});

//ubah route biodata yang diatas kedalam route optional parameter
//jika salah satu parameter tidak diisi secara berurutan,maka tidak ditampilkan
//jika semua parameter tidak diisi maka ada keterangan "isi dulu biodata anda"
//boleh menggunakan view boleh juga tidak menggunakan view

//Latihan Router Optional Parameter Bio
Route::get('bio/{nama?}/{alamat?}/{jk?}/{tb?}/{bb?}', function ($nama=null,$alamat=null,$jk=null,$tb=null,$bb=null) {
    return view('bio', compact('nama','alamat','jk','tb','bb'));

});


//mengakses data melalui model
Route::get('testmodel', function () {
    $query = App\Models\Post::all();
    return $query;
});

//mencari data berdasarkan parameter 'id'
Route::get('testmodel/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    return $query;
});

//mencari data berdasarkan field 'title' yang sama dengan
//parameter 's'
Route::get('testmodel-cari/{search}', function ($s) {
    $query = App\Models\Post::where('title', 'like', "%$s%")
       ->get();
    return $query;
});

//mengubah judul dari data ke 2 berdasarkan 'id'
Route::get('testmodel-update', function () {
    $query = App\Models\Post::find(2);
    $query->title = "Bane Si Bajak Laut";
    $query->save();
    return $query;
});

//menambah data baru
Route::get('testmodel-add', function () {
    $query = new App\Models\Post();
    $query->title = "Sholawat Penghapus Maksiat";
    $query->content = "Lorem ipsum sit amet dolor";
    $query->save();
    return $query;
});

//menghapus tabel
Route::get('testmodel-delete/{id}', function ($id) {
    $query = App\Models\Post::find($id);
    $query->delete();
    return redirect('/testmodel');
});

//silahkan buat model dari setiap table yang sudah dibuat
//kemudian akses datanya dari setiap table
//supplier -> muncu semua data supplier



//mengakses data melalui model
Route::get('barang', function () {
    $query = App\Models\barang::all();
    return $query;
});

//mengakses data melalui model
Route::get('pesanan', function () {
    $query = App\Models\pesanan::all();
    return $query;
});

//mengakses data melalui model
Route::get('pembelian', function () {
    $query = App\Models\pembelian::all();
    return $query;
});

//mengakses data melalui model
Route::get('pembeli', function () {
    $query = App\Models\pembeli::all();
    return $query;
});

//mengakses data melalui model
Route::get('supplier', function () {
    $query = App\Models\supplier::all();
    return $query;
});