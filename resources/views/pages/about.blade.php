@extends('layout')

@section('title', 'About Page')

@section('content')
    <h2>About.</h2>
    <div>
        <p>Berikut fasilitas yang bisa anda gunakan. Login sebagai:</p>
        @if($role == "admin")
            Admin - Menambahkan, Mengedit, Menghapus Barang
        @elseif($role == "teller")
            Teller - Mengunduh Laporan KWU
        @else
            Kamu aneh, role tidak diketahui.
        @endif
    </div>
@endsection
