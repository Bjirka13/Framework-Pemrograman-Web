@extends('app')

@section('content')
    <h1>Halaman Tambah Barang</h1>
    <form action="{{ route('barang.simpan') }}" method="POST">
        @csrf
        <div>
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" id="kode_barang" name="kode_barang" required>
        </div>
        <div>
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang">
        </div>
        <div>
            <label for="jumlah">Jumlah:</label>
            <input type="text" id="jumlah" name="jumlah" required>
        </div>
        <button type="submit">Simpan</button>
@endsection