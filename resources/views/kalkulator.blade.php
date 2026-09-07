@extends('layouts.app')
@section('title', 'Kalkulator')

@php
    $simbolMap = [
        'tambah' => '+',
        'kurang' => '−',
        'kali'   => '×',
        'bagi'   => '÷',
    ];
    $simbol = $simbolMap[$operasi] ?? $operasi;
@endphp

@section('content')
<section class="content-section content-section-offset">
    <div class="section-container">
        <div class="eyebrow-chip mb-3">
            <span class="eyebrow-dot"></span>
            <span>Dynamic Calculator</span>
        </div>

        <h1 class="section-headline mb-2">Kalkulator Parameter URL</h1>
        <p class="body-support mb-5">
            Kalkulasi dikirim melalui URL route Laravel <span class="route-example">/hitung/{angka1}/{angka2}/{operasi}</span> lalu akan diproses oleh controller dan dikembalikan ke view.
        </p>

        <div class="calc-card">
            <div class="calc-display">
                <div class="calc-expression">{{ $angka1 }} {{ $simbol }} {{ $angka2 }} =</div>
                @if($error)
                    <div class="calc-result calc-error">{{ $error }}</div>
                @else
                    <div class="calc-result">{{ is_float($hasil) && floor($hasil) != $hasil ? number_format($hasil, 2) : $hasil }}</div>
                @endif
            </div>

            <div class="calc-ops">
                <a href="{{ route('hitung', [$angka1, $angka2, 'tambah']) }}" class="calc-op-btn {{ $operasi == 'tambah' ? 'active' : '' }}">+ Tambah</a>
                <a href="{{ route('hitung', [$angka1, $angka2, 'kurang']) }}" class="calc-op-btn {{ $operasi == 'kurang' ? 'active' : '' }}">− Kurang</a>
                <a href="{{ route('hitung', [$angka1, $angka2, 'kali']) }}" class="calc-op-btn {{ $operasi == 'kali' ? 'active' : '' }}">× Kali</a>
                <a href="{{ route('hitung', [$angka1, $angka2, 'bagi']) }}" class="calc-op-btn {{ $operasi == 'bagi' ? 'active' : '' }}">÷ Bagi</a>
            </div>

            <div class="calc-presets">
                <span class="calc-preset-label">Contoh rute:</span>
                <div class="calc-preset-links">
                    <a href="{{ route('hitung', [10, 5, 'kali']) }}"    class="calc-preset-chip">/hitung/10/5/kali</a>
                    <a href="{{ route('hitung', [20, 4, 'bagi']) }}"    class="calc-preset-chip">/hitung/20/4/bagi</a>
                    <a href="{{ route('hitung', [15, 3, 'tambah']) }}"  class="calc-preset-chip">/hitung/15/3/tambah</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection