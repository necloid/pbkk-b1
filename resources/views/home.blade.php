@extends('layouts.app')
@section('title', 'Home')

@section('content')
<section class="hero-section">
    <div class="section-container">
        <div class="eyebrow-chip">
            <span class="eyebrow-dot"></span>
            <span>Academic Portal 2026</span>
        </div>

        <h1 class="hero-headline">Hello! Welcome to ITS Academic Profile</h1>
        
        <p class="body-support">
            Selamat datang visitor! Website ini adalah sistem profil akademik sebagai tugas mata kuliah Pemrograman Berbasis Kerangka Kerja (B), dengan deskripsi ide Final Project, kalkulator, dan informasi departemen Teknik Informatika ITS.
        </p>

        <div class="btn-group-custom mb-5">
            <a href="{{ route('about') }}" class="btn-primary-pill">
                <span>About</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>

            <a href="{{ route('project') }}" class="btn-secondary-pill">
                <span>Project</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>

            <a href="{{ route('hitung', [10, 5, 'kali']) }}" class="btn-secondary-pill">
                <span>Kalkulator</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
        </div>

        <div class="finder-card-bg">
            <div class="macos-window-chrome">
                <div class="traffic-dots">
                    <div class="traffic-dot red"></div>
                    <div class="traffic-dot yellow"></div>
                    <div class="traffic-dot green"></div>
                </div>
                <div class="window-title-text">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                    <span>Academic_Directory</span>
                </div>
                <div class="window-spacer window-spacer-sm"></div>
            </div>

            <div class="finder-directory-body">
                <div class="finder-sidebar-strip">
                    <div class="finder-sidebar-heading">Favorites</div>
                    <span class="finder-sidebar-item selected">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                        <span>Photos</span>
                    </span>
                    <span class="finder-sidebar-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                        <span>Docs</span>
                    </span>
                    <span class="finder-sidebar-item">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"/></svg>
                        <span>Projects</span>
                    </span>
                </div>

                <div class="finder-main-content">
                    <div class="finder-file-grid">
                        <div class="finder-file-item selected">
                            <div class="file-icon-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#888888" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                            </div>
                            <span class="file-label">student.png</span>
                            <svg class="cursor-hint-arrow" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4.5 3.5l14 8.5-7 1.8 4 7.2-2.5 1.4-4-7.2-4.5 4.3z"/>
                            </svg>
                        </div>

                        <div class="finder-file-item">
                            <div class="file-icon-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#888888" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                            </div>
                            <span class="file-label">PBKK_B.pdf</span>
                        </div>

                        <div class="finder-file-item">
                            <div class="file-icon-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#888888" stroke-width="1.8"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
                            </div>
                            <span class="file-label">Agentic.py</span>
                        </div>

                        <div class="finder-file-item">
                            <div class="file-icon-box">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#888888" stroke-width="1.8"><rect x="4" y="2" width="16" height="20" rx="3"/><line x1="8" y1="6" x2="16" y2="6"/><line x1="8" y1="10" x2="16" y2="10"/></svg>
                            </div>
                            <span class="file-label">Profile.docx</span>
                        </div>
                    </div>

                    <div class="finder-statusbar">
                        4 items &bull; 1.4 GB available
                    </div>
                </div>

                <div class="floating-window win-preview">
                    <div class="macos-window-chrome">
                        <div class="window-title-text">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
                            <span>student.png</span>
                        </div>
                        <div class="window-spacer window-spacer-sm"></div>
                    </div>

                    <div class="preview-body">
                        <img src="{{ asset('images/profile_avatar.png') }}" alt="ITS Academic Profile Photo" class="preview-img">
                    </div>
                </div>

                <div class="floating-window win-getinfo">
                    <div class="macos-window-chrome">
                        <div class="window-title-text">
                            <span>Get Info</span>
                        </div>
                        <div class="window-spacer window-spacer-sm"></div>
                    </div>

                    <div class="getinfo-body">
                        <div class="getinfo-row">
                            <span class="getinfo-label">Nama Mahasiswa</span>
                            <span class="getinfo-val">{{ $name }}</span>
                        </div>

                        <div class="getinfo-row">
                            <span class="getinfo-label">NRP</span>
                            <span class="getinfo-val font-monospace">{{ $nrp }}</span>
                        </div>

                        <div class="getinfo-row">
                            <span class="getinfo-label">Departemen</span>
                            <span class="getinfo-val">{{ config('profile.department') }}</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection