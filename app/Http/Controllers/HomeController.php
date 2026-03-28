<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    return view('home', [
        'title' => 'Sistem Informasi Absensi',
        'description' => 'Aplikasi untuk mengelola absensi siswa secara digital'
    ]);
}
}
