@extends('layouts.app')

@section('title', 'Landing Page')

@section('content')

<div class="text-center py-5">
    <h1 class="fw-bold">{{ $title }}</h1>
    <p class="mb-4">{{ $description }}</p>
    <a href="#" class="btn btn-primary">Mulai Sekarang</a>
</div>
<div class="row text-center my-5">
    <div class="col-md-4">
        <h4>Absensi Cepat</h4>
        <p>Input data hanya dalam hitungan detik</p>
    </div>
    <div class="col-md-4">
        <h4>Data Real-time</h4>
        <p>Semua data langsung tersimpan</p>
    </div>
    <div class="col-md-4">
        <h4>Laporan Otomatis</h4>
        <p>Rekap absensi tanpa manual</p>
    </div>
</div>



@endsection