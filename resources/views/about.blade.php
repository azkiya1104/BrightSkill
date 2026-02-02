@extends('layouts.app')

@section('content')
<section class="about-hero-consistent reveal-on-scroll">
    <h1>ABOUT OUR <span>PLATFORM</span></h1>
    <p class="sub-heading-about">
        Mengenal lebih dekat BrightSkill, teman perjalanan digital masa depanmu! ✨
    </p>
</section>

<section class="about-content-section reveal-on-scroll" style="padding: 80px 10%;">
    <div class="floating-narrative-card">
        <h2 style="font-size: 35px; font-weight: 950; color: var(--pink); margin-bottom: 25px;">Platform Belajar Skill Digital</h2>
        <p style="font-size: 19px; line-height: 1.8; font-weight: 700; color: #444;">
            <span class="highlight-text">BrightSkill</span> merupakan website simulasi layanan pendidikan digital yang menyediakan kelas online untuk pembelajaran skill digital dasar. 
            Website ini dirancang khusus untuk pemula dengan tampilan yang ceria dan interaktif guna meningkatkan motivasi belajar kamu!
        </p>
    </div>
</section>

<div class="vision-grid reveal-on-scroll">
    <div class="vision-card">
        <h3 style="font-weight: 950; font-size: 28px; margin-bottom: 15px;">Visi Kami</h3>
        <p style="font-weight: 600;">Menjadi platform pembelajaran digital yang menyenangkan, inklusif, dan mudah diakses oleh seluruh pemula di Indonesia.</p>
    </div>
    <div class="vision-card" style="box-shadow: 10px 10px 0 var(--yellow);">
        <h3 style="font-weight: 950; font-size: 28px; margin-bottom: 15px;">Misi Kami</h3>
        <ul style="font-weight: 600; list-style: none; padding: 0;">
            <li style="margin-bottom: 10px;">✅ Menyediakan kelas digital berkualitas untuk pemula</li>
            <li style="margin-bottom: 10px;">✅ Menyajikan dashboard pembelajaran yang interaktif</li>
            <li style="margin-bottom: 10px;">✅ Menghadirkan tampilan UI/UX yang ceria & modern</li>
        </ul>
    </div>
</div>

<section class="team-container reveal-on-scroll">
    <h2 style="font-size: 45px; font-weight: 950;">Meet Our <span>Team</span></h2>
    <div class="team-grid">
        <div class="team-card">
            <div class="team-avatar">
                <img src="{{ asset('images/kia.jpg') }}" alt="Kia">
            </div>
            <h3 style="font-weight: 950; font-size: 24px;">Kia</h3>
            <span class="role-badge">Front-End Developer</span>
            <p style="margin-top: 15px; font-weight: 600; font-size: 14px;">Mahasiswa IT Semester 6 yang berfokus pada pengembangan antarmuka web yang interaktif.</p>
        </div>

        <div class="team-card" style="box-shadow: 12px 12px 0 var(--pink);">
            <div class="team-avatar">
                <img src="{{ asset('images/dea.jpg') }}" alt="Partner">
            </div>
            <h3 style="font-weight: 950; font-size: 24px;">Dea</h3>
            <span class="role-badge" style="background: var(--yellow); color: var(--navy);">UI/UX Designer</span>
            <p style="margin-top: 15px; font-weight: 600; font-size: 14px;">Bertanggung jawab atas riset pengguna dan perancangan desain visual platform yang ceria.</p>
        </div>
    </div>
</section>

<section class="section-padding reveal-on-scroll" style="text-align: center; background: var(--bg-page);">
    <h2 style="font-size: 40px; font-weight: 950; margin-bottom: 30px;">Siap mulai perjalanan belajar digitalmu?</h2>
    <div style="display: flex; justify-content: center; gap: 20px;">
        <a href="{{ url('/register') }}" class="btn-main">Daftar Kelas Sekarang</a>
        <a href="{{ url('/dashboard') }}" class="filter-btn" style="text-decoration: none; padding: 15px 30px;">Lihat Dashboard</a>
    </div>
</section>
@endsection