@extends('app')

@section('content')
    <h1>Tentang Kami</h1>
    <p>
        PT Inventaris Solusi Mandiri adalah perusahaan yang bergerak di bidang manajemen inventaris dan penyediaan solusi
        pencatatan aset bagi berbagai sektor bisnis. Kami berfokus pada pengembangan sistem inventaris yang terintegrasi,
        akurat, dan mudah digunakan untuk membantu perusahaan mengelola aset, barang, serta stok secara efisien. Dengan
        layanan yang mengutamakan ketepatan data dan transparansi, kami hadir sebagai mitra terpercaya dalam meningkatkan
        efektivitas operasional dan mendukung pengambilan keputusan berbasis informasi yang real-time.
    </p>

    <div style="margin-top:20px;">
        <img src="{{ asset('images/about_us.jpg') }}" alt="Company Profile" width="400">
    </div>
@endsection