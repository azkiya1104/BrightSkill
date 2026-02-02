@extends('layouts.app')

@section('content')
<section class="event-banner-yellow">
    <h1 style="font-size: 85px; font-weight: 950; line-height: 1.2; color: white; -webkit-text-stroke: 3px var(--stroke); letter-spacing: -2px; margin: 0;">
        EVENT <span style="background: white; border: 5px solid var(--stroke); padding: 0 15px; display: inline-block; transform: rotate(-2deg); box-shadow: 8px 8px 0 var(--navy); color: var(--pink); -webkit-text-stroke: 0px; margin-left: 10px;">SERU!</span>
    </h1>
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
            <button class="btn-main" onclick="openEventModal('Ngoding Santuy: Build Web', 'Workshop tatap muka khusus pemula untuk merakit website pertama kamu dari nol.', 'BrightSpace Cafe, Surabaya', '14:00 - 17:00 WIB')" style="width: 100%; text-align: center; margin-top: auto; cursor: pointer;">Lihat Detail</button>
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
            <button class="btn-main" onclick="openEventModal('UI/UX Future Trend', 'Eksplorasi tren desain 2026, mulai dari AI Integration hingga Neo-Brutalism style.', 'Zoom Meeting / YouTube Live', '19:00 - 21:00 WIB')" style="width: 100%; text-align: center; margin-top: auto; cursor: pointer;">Lihat Detail</button>
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
            <button class="btn-main" onclick="openEventModal('Bright Coding Cup', 'Lomba coding tingkat nasional untuk kategori mahasiwa pemula. Tunjukkan kodemu!', 'Pusat Inovasi Digital', '08:00 WIB - Selesai')" style="width: 100%; text-align: center; margin-top: auto; cursor: pointer;">Lihat Detail</button>
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
            <button class="btn-main" onclick="openEventModal('BrightSkill Meetup', 'Ajang silaturahmi alumni dan siswa BrightSkill untuk membangun relasi di dunia kerja.', 'Coworking Space Jakarta', '15:00 - 18:00 WIB')" style="width: 100%; text-align: center; margin-top: auto; cursor: pointer;">Lihat Detail</button>
        </div>
    </div>
</div>

<div id="eventModal" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); backdrop-filter: blur(10px); display: none; align-items: center; justify-content: center; z-index: 999999;">
    <div style="background: white; width: 90%; max-width: 500px; padding: 40px; border-radius: 40px; border: 5px solid black; position: relative; box-shadow: 15px 15px 0px #FF8BA7;">
        <span onclick="closeEventModal()" style="position: absolute; top: 10px; right: 20px; font-size: 45px; cursor: pointer; font-weight: 900;">&times;</span>
        <h2 id="modalEventTitle" style="font-weight: 950; margin-bottom: 15px; font-size: 28px; color: var(--navy);"></h2>
        <p id="modalEventDesc" style="font-weight: 700; color: #444; margin-bottom: 25px; line-height: 1.6;"></p>
        
        <div style="background: #fdfbf7; padding: 25px; border: 3px solid black; border-radius: 25px; font-weight: 800;">
            <p style="margin-bottom: 10px;">📍 <span style="color: #666;">Lokasi:</span> <br> <span id="modalEventLoc" style="color: var(--pink);"></span></p>
            <p>⏰ <span style="color: #666;">Waktu:</span> <br> <span id="modalEventTime" style="color: var(--pink);"></span></p>
        </div>
        
        <button class="btn-main" onclick="closeEventModal()" style="width: 100%; margin-top: 30px; font-size: 18px;">Mantap, Aku Ikut! </button>
    </div>
</div>
@endsection