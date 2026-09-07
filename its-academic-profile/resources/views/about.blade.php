@extends('layouts.app')
@section('title', 'About')

@section('content')
<section class="about-hero-section">
    <div class="about-hero-blur-layer"></div>
    <div class="section-container">
        <div class="eyebrow-chip mb-3">
            <span class="eyebrow-dot"></span>
            <span>Institusi & Departemen</span>
        </div>

        <h1 class="section-headline section-headline-wide mb-4">Departemen Teknik Informatika ITS</h1>

        <p class="body-support mb-5">
            Departemen Teknik Informatika Institut Teknologi Sepuluh Nopember berfokus pada pengembangan ilmu komputer, rekayasa perangkat lunak, kecerdasan buatan, dan sistem informasi terapan. Departemen ini mencetak lulusan yang siap berkontribusi dalam industri teknologi maupun riset akademik global.
        </p>

        <div class="facts-grid">
            <div class="fact-item">
                <div class="fact-number">#1</div>
                <h2 class="fact-title">Keunggulan Akademik</h2>
                <p class="fact-desc">Departemen Informatika pilihan utama di Indonesia dengan kurikulum komputasi berdaya saing global.</p>
            </div>

            <div class="fact-item">
                <div class="fact-number">ASIIN</div>
                <h2 class="fact-title">Akreditasi Internasional</h2>
                <p class="fact-desc">Telah tersertifikasi dan terakreditasi secara internasional oleh lembaga akreditasi komputasi Jerman.</p>
            </div>

            <div class="fact-item">
                <div class="fact-number">8+</div>
                <h2 class="fact-title">Laboratorium Riset</h2>
                <p class="fact-desc">Lab yang mencakup AI, Cyber Security, Software Engineering, dan berbagai bidang lainnya.</p>
            </div>

            <div class="fact-item">
                <div class="fact-number">100%</div>
                <h2 class="fact-title">Kesiapan Industri</h2>
                <p class="fact-desc">Kemitraan strategis dengan perusahaan teknologi global untuk magang, proyek riset, dan karir.</p>
            </div>
        </div>
    </div>
</section>
@endsection