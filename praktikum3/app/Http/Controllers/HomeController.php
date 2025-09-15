<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class HomeController extends Controller
{
    public function home(){
        $jumlahBarang = Barang::count();
        return view('home', compact('jumlahBarang'));
    }
}
