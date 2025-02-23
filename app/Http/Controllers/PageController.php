<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama: Farel Maryam Laila Hajiri <br> NIM: 2341760028';
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id $id";
    }
}
