<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function barang(){
        $barangs = Barang::all();
        return view('barang', compact('barangs'));
    }

    public function tambahBarang(){
        return view('tambahbarang');
    }

    public function simpan(Request $request){
        $request->validate([
                'kode_barang' => 'required|string|max:255',
                'nama_barang' => 'required|string|max:255',
                'jumlah' => 'required|string|max:255',
            ]);

            Barang::create([
                'kode_barang' => $request->kode_barang,
                'nama_barang' => $request->nama_barang,
                'jumlah' => $request->jumlah,
            ]);
			
		$barangs = Barang::all();
        return view('barang', compact('barangs'));
    }

}
