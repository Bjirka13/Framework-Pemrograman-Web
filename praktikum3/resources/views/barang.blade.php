@extends('app')

@section('content')
    <h1>Welcome to Barang Page</h1>
    <a href="{{ route('barang.tambah') }}">
        <button>Tambah Barang</button>
    </a>
    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Tahun Terbit</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->jumlah }}</td>
        </tr>
        @endforeach
    </table>
@endsection