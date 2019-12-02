<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\user;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        $nama = 'Adel Kharisma';
        return view('about', ['nama' => $nama ]);
    }
}

