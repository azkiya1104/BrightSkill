@extends('layouts.app')

@section('content')
<section class="event-banner-yellow">
    <h1>EVENT <span style="background: white; border: 5px solid var(--stroke); padding: 0 15px; display: inline-block; transform: rotate(-2deg); box-shadow: 8px 8px 0 var(--navy);">SERU!</span></h1>
    <p style="font-weight: 800; color: var(--navy); margin-top: 25px; font-size: 18px;">
        Ikuti berbagai kegiatan seru bareng komunitas BrightSkill setiap bulannya.
    </p>
</section>

<div class="event-grid-container">
    <div class="event-card-compact">
        <div class="event-thumbnail">
            <div class="date-badge-yellow">15 FEB 2026</div>
            <img src="{{ asset('images/gallery/event1.png') }}" alt="Workshop">
        </div>
        <div class="event-info-box">
            <span style="color: var(--pink); font-weight: 800; font-size: 12px; margin-bottom: 10px; display: block;">OFFLINE WORKSHOP</span>
            <h3>Ngoding Santuy: Build Web</h3>
            <p>Belajar HTML & CSS dasar sambil nongkrong asyik bareng mentor.</p>
            <a href="{{ route('coming.soon') }}" class="btn-main" style="width: 100%; text-align: center; margin-top: auto;">Lihat Dokumentasi</a>
        </div>
    </div>

    <div class="event-card-compact">
        <div class="event-thumbnail">
            <div class="date-badge-yellow">22 MAR 2026</div>
            <img src="{{ asset('images/gallery/event2.png') }}" alt="Webinar">
        </div>
        <div class="event-info-box">
            <span style="color: var(--pink); font-weight: 800; font-size: 12px; margin-bottom: 10px; display: block;">ONLINE WEBINAR</span>
            <h3>UI/UX Future Trend</h3>
            <p>Bedah tuntas tren desain masa depan bareng designer ternama.</p>
            <a href="{{ route('coming.soon') }}" class="btn-main" style="width: 100%; text-align: center; margin-top: auto;">Daftar Replay</a>
        </div>
    </div>

    <div class="event-card-compact">
        <div class="event-thumbnail">
            <div class="date-badge-yellow">05 APR 2026</div>
            <img src="{{ asset('images/gallery/event3.png') }}" alt="Competition">
        </div>
        <div class="event-info-box">
            <span style="color: var(--pink); font-weight: 800; font-size: 12px; margin-bottom: 10px; display: block;">COMPETITION</span>
            <h3>Bright Coding Cup</h3>
            <p>Uji kemampuan logikamu dan menangkan hadiah menarik dari kami.</p>
            <a href="{{ route('coming.soon') }}" class="btn-main" style="width: 100%; text-align: center; margin-top: auto;">Info Lomba</a>
        </div>
    </div>

    <div class="event-card-compact">
        <div class="event-thumbnail">
            <div class="date-badge-yellow">12 MEI 2026</div>
            <img src="{{ asset('images/gallery/event4.png') }}" alt="Meetup">
        </div>
        <div class="event-info-box">
            <span style="color: var(--pink); font-weight: 800; font-size: 12px; margin-bottom: 10px; display: block;">COMMUNITY</span>
            <h3>BrightSkill Meetup</h3>
            <p>Diskusi santai mengenai karir IT dan networking antar siswa.</p>
            <a href="{{ route('coming.soon') }}" class="btn-main" style="width: 100%; text-align: center; margin-top: auto;">Gabung Komunitas</a>
        </div>
    </div>
</div>
@endsection