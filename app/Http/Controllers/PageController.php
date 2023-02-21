<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        echo "Nama : Muhammad Islahuddin <br> NIM : 2141720268";
    }

    public function articles($id){
        echo "Halaman Artikel Ini dengan ID ".$id;
    }
}
