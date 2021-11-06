<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

//mengimport model Post
use App\Models\Post;
//mengimport model post
use App\Models\pembelian;
use App\Models\pembeli;
use App\Models\singlepembelian;
use App\Models\hero;

class MyController extends Controller
{
    //membuat method
    public function index()
    {
       $data = [
        ['nama' => 'Dadang Konelo', 'kelas' => 'XII RPL 3'],
        ['nama' => 'Mamat Kelvin', 'kelas' => 'XII RPL 1'],
        ['nama' => 'Asep Jenang', 'kelas' => 'XII RPL 2'],
    ];
    return view('latihan', compact('data'));
    }

    public function posting()
    {
        $posts = Post::all();
        return view('post', compact('posts'));
    }

    //latihan 2 method
    //tampilkan semua dari data pembelian
    //tampilkan data pembelian berdasarkan parameter id
    //tampilkan semuanya(pembelian dan singlepembeli) ke view

    //membuat method pembelian
    public function pembelian()
    {
        $pembelian = pembelian::all();
        return view('pembelian', compact('pembelian'));
    }


    public function singlePembelian($id){
        $singlepembelian = pembelian::findOrfail($id);
        //dd($pembelian);
        return view('singlepembelian', compact('singlepembelian'));
    }

    //membuat method hero
    public function hero()
    {
        //menampilkan semua data dari model hero
        $hero = hero::all();
        return view('hero', compact('hero'));
    }
    public function singlehero($id)
    {
        //menampilkan data berdasarkan id dari model hero
        $singlehero = hero::findOrFail($id);
        return view('singlehero', compact('singlehero'));
    }

}