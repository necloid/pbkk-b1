@extends('layouts.app')
@section('title', 'Project Idea')

@section('content')
<section class="content-section content-section-offset">
    <div class="section-container">
        <div class="eyebrow-chip mb-3">
            <span class="eyebrow-dot"></span>
            <span>Final Project: Agentic AI</span>
        </div>

        <h1 class="section-headline section-headline-project mb-4">Network Port Scanner & Log Analyzer Agent</h1>

        <p class="body-support mb-5">
            Agen AI berbasis Laravel yang mampu melakukan scanning port jaringan, menganalisis log sistem secara otomatis, dan memberikan laporan melalui antarmuka chat interaktif tanpa memerlukan instalasi tools third-party rumit.
        </p>

        <div class="terminal-card mb-5">
            <div class="terminal-chrome">
                <div class="traffic-dots">
                    <div class="traffic-dot red"></div>
                    <div class="traffic-dot yellow"></div>
                    <div class="traffic-dot green"></div>
                </div>
                <span class="terminal-title">agent-chat — bash (example)</span>
                <div class="window-spacer window-spacer-lg"></div>
            </div>
            <div class="terminal-body">
                <div class="terminal-line"><span class="t-prompt">user@agent</span><span class="t-sym">:~$</span> <span class="t-cmd">Scan port terbuka pada 192.168.1.1</span></div>
                <div class="terminal-line t-muted">▶ Memproses permintaan melalui LLM (Ollama / Senopati AI)...</div>
                <div class="terminal-line t-muted">▶ Menjalankan tool: <span class="t-highlight">port_scanner(host="192.168.1.1")</span></div>
                <div class="terminal-line t-success">✔ Port 22 (SSH) — OPEN</div>
                <div class="terminal-line t-success">✔ Port 80 (HTTP) — OPEN</div>
                <div class="terminal-line t-success">✔ Port 443 (HTTPS) — OPEN</div>
                <div class="terminal-line t-muted">▶ Menganalisis log terakhir dari <span class="t-highlight">/var/log/syslog</span>...</div>
                <div class="terminal-line t-warn">⚠ 3 entri mencurigakan ditemukan — port 22 brute force attempt (12:41 WIB)</div>
                <div class="terminal-line"><span class="t-prompt">agent</span><span class="t-sym"> ></span> <span class="t-white">Laporan selesai. Apakah ingin dikirim ke email?</span></div>
            </div>
        </div>

        <div class="feature-cols">
            <div class="feature-col">
                <div class="feature-badge">UI Reaktif</div>
                <h3 class="feature-title">Laravel Livewire</h3>
                <p class="feature-desc">Antarmuka interaktif yang reaktif menggunakan Laravel Livewire, pesan dikirim dan diterima secara real-time tanpa reload halaman.</p>
            </div>

            <div class="feature-col">
                <div class="feature-badge">LLM</div>
                <h3 class="feature-title">Integrasi LLM Lokal</h3>
                <p class="feature-desc">Terhubung langsung ke API LLM lokal melalui <strong>Ollama</strong> (gratis, offline) atau <strong>Senopati AI ITS</strong> sebagai alternatif cloud akademik.</p>
            </div>

            <div class="feature-col">
                <div class="feature-badge">Tool Use</div>
                <h3 class="feature-title">Tool Execution</h3>
                <p class="feature-desc">Mampu memanggil backend task seperti script Python, command shell, dan job queue otomatis berdasarkan instruksi pengguna dalam chat.</p>
            </div>
        </div>
    </div>
</section>
@endsection