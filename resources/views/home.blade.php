@extends('layouts.app')

@section('content')

<section class="hero-full reveal-on-scroll">
    <div class="squiggle squiggle-1"></div>
    <div class="squiggle squiggle-2"></div>
    <div class="squiggle squiggle-3"></div>
    <div class="squiggle squiggle-4"></div>
    <div class="squiggle squiggle-5"></div>
    <div class="squiggle squiggle-6"></div>
    <div class="squiggle squiggle-7"></div>
    <div class="squiggle squiggle-8"></div>

    <div class="grid-2" style="position: relative; z-index: 2;">
        <div class="hero-text">
            <h1 class="hero-title">
                LEVEL UP <br> 
                <span>SKILL-MU!</span>
            </h1>
            <p class="hero-subtitle">
                Platform EduTech ceria untuk belajar Coding, UI/UX, dan Digital Dasar!
            </p>
            <div style="display: flex; gap: 25px;">
                <a href="{{ url('/register') }}" class="btn-main" style="font-size: 20px; padding: 20px 40px;">Mulai Belajar</a>
                <a href="{{ url('/classes') }}" class="btn-main" style="background: var(--blue); font-size: 20px; padding: 20px 40px;">Lihat Kelas</a>
            </div>
        </div>

        <div class="hero-image-box">
            <h2>[ HAPPY DOODLE ]</h2>
        </div>
    </div>
</section>

<section class="section-full-layout reveal-on-scroll">
    <h1 class="main-heading-google">
        Jago Skill Digital Jadi Makin <br> Seru Bareng <span>BRIGHTSKILL!</span>
    </h1>
    
    <p class="sub-heading-google">
        Gak perlu pusing belajar tech! Intip cara asyik buat kamu kuasai dunia digital masa depan dengan modul yang super interaktif dan ceria.
    </p>

    <div class="skills-wrapper-clean">
        <div class="visual-anchor-free" style="justify-content: center; display: flex;">
            <h2 id="dynamic-visual">CERIA</h2>
        </div>

        <div class="info-list-google">
            <div class="info-item active" onclick="changeSkillClean('CERIA', this, '#FFD803')">
                <h3>Tampilan Ceria & Interaktif</h3>
                <div class="info-text">
                    Unlock gaya belajar baru! Kami merancang platform dengan estetika Gen-Z yang ceria agar kamu tetap bersemangat saat memahami materi digital dasar yang kompleks.
                </div>
            </div>

            <div class="info-item" onclick="changeSkillClean('PROGRES', this, '#AEE1E1')">
                <h3>Learning Dashboard</h3>
                <div class="info-text">
                    Pantau progres belajarmu secara real-time. Kamu bisa melihat modul mana yang sudah selesai, klaim badge spesial, dan melihat rank kamu.
                </div>
            </div>

            <div class="info-item" onclick="changeSkillClean('PEMULA', this, '#FF8BA7')">
                <h3>Materi Skill Digital Dasar</h3>
                <div class="info-text">
                    Semua materi dirancang khusus untuk pemula dengan analogi sederhana yang mudah dicerna oleh siapa saja.
                </div>
            </div>

            <div class="info-item" onclick="changeSkillClean('BEBAS', this, '#C3ACD0')">
                <h3>Belajar Fleksibel</h3>
                <div class="info-text">
                    Akses kapan saja dan di mana saja! Platform kami tersedia 24/7 untuk mendukung jadwal mu yang padat.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-light-path reveal-on-scroll">
    <h2 style="color: var(--navy); margin-bottom: 60px; font-size: 50px; font-weight: 900;">
        Pilih Path Belajarmu
    </h2>
    
    <div class="grid-3">
        <div class="class-card">
            <div>
                <div class="path-badge">
                    <span>⠿</span> Learning Path
                </div>
                <h4>Logika Dasar <br> Programming</h4>
                <p>Pelajari fondasi utama dalam dunia IT. Dari variabel hingga struktur kontrol, dirancang khusus untuk Kia yang ingin mulai ngoding dengan seru!</p>
            </div>
            <a href="{{ url('/classes') }}" class="btn-circle">
                <span>→</span>
            </a>
        </div>

        <div class="class-card">
            <div>
                <div class="path-badge">
                    <span>⠿</span> Learning Path
                </div>
                <h4>Creative Visual <br> UI/UX Design</h4>
                <p>Gak cuma asal gambar! Di sini kamu belajar cara membuat tampilan aplikasi yang bikin user jatuh cinta lewat riset dan desain interaktif.</p>
            </div>
            <a href="{{ url('/classes') }}" class="btn-main" style="background: var(--pink); width: 65px; height: 65px; border-radius: 50%; display: flex; align-items: center; justify-content: center; padding: 0; align-self: flex-end;">
                <span style="font-size: 28px;">→</span>
            </a>
        </div>

        <div class="class-card">
            <div>
                <div class="path-badge">
                    <span>⠿</span> Learning Path
                </div>
                <h4>Data Safety & <br> Digital Literacy</h4>
                <p>Pahami cara kerja internet secara mendalam. Belajar cara melindungi data pribadi Kia di era digital supaya tetap aman dan tetap cerdas.</p>
            </div>
            <a href="{{ url('/classes') }}" class="btn-circle" style="background: var(--yellow);">
                <span>→</span>
            </a>
        </div>
    </div>
</section>

<section class="section-padding reveal-on-scroll section-white" style="border-top: 5px solid var(--stroke);">
    <h2 style="font-size: 50px; font-weight: 900; margin-bottom: 60px; text-align: center;">Gampang Banget! 🛠️</h2>
    
    <div class="path-container">
        <div class="path-step">
            <div class="step-card" style="background: var(--blue);">
                <span class="step-number">1</span>
                <h3>Daftar Akun</h3>
                <p>Bikin akun kilat cuma semenit!</p>
            </div>
            <div class="path-line"></div>
        </div>

        <div class="path-step">
            <div class="step-card" style="background: var(--yellow);">
                <span class="step-number">2</span>
                <h3>Akses Materi</h3>
                <p>Pilih kelas favoritmu & mulai belajar.</p>
            </div>
            <div class="path-line"></div>
        </div>

        <div class="path-step">
            <div class="step-card" style="background: var(--mint);">
                <span class="step-number">3</span>
                <h3>Pantau Progres</h3>
                <div class="progress-bar" style="height: 15px; margin: 10px 0;"><div class="progress-fill" style="width: 70%;"></div></div>
                <p>Cek statistik belajarmu di Dashboard.</p>
            </div>
            <div class="path-line"></div>
        </div>

        <div class="path-step">
            <div class="step-card" style="background: var(--pink); color: white;">
                <span class="step-number" style="background: white; color: var(--pink);">4</span>
                <h3 style="color: white;">Selesaikan Kelas</h3>
                <p style="color: rgba(255,255,255,0.9);">Klaim Badge & jadi Digital Hero! 🎉</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding reveal-on-scroll dashboard-preview section-bg-page">
    <div class="grid-2">
        <div style="background: var(--white); padding: 50px; border: 5px solid var(--stroke); border-radius: 40px; box-shadow: 15px 15px 0px var(--navy);">
            <h3 style="font-weight: 900; font-size: 32px;">Your Energy Level ⚡</h3>
            <div class="progress-bar"><div class="progress-fill"></div></div>
            <p style="font-weight: 800; font-size: 20px;">Rank: <span style="color: var(--pink);">Superstar Learner ⭐</span></p>
        </div>
        <div>
            <h2 style="font-size: 50px; font-weight: 900;">Dashboard <br> Keren Menantimu!</h2>
            <p style="font-size: 18px; margin-top: 20px;">Pantau progres belajarmu dengan tampilan yang interaktif dan penuh reward.</p>
        </div>
    </div>
</section>

<section class="section-padding reveal-on-scroll section-blue" style="text-align: center;">
    <div style="background: var(--white); padding: 40px; border: 4px solid var(--stroke); border-radius: 30px; box-shadow: 10px 10px 0px var(--navy); max-width: 800px; margin: 0 auto;">
        <p style="font-size: 24px; font-style: italic; font-weight: 700;">"Belajarnya seru banget & dashboard-nya gampang dipahami buat pemula!"</p>
        <p style="margin-top: 20px; font-weight: 900;">- Kia, Mahasiswa TI 👩‍💻</p>
    </div>
</section>

<section class="section-padding reveal-on-scroll section-yellow" style="text-align: center;">
    <h2 style="font-size: 55px; font-weight: 900; margin-bottom: 30px;">Siap Jadi Digital Hero? 🚀</h2>
    <a href="{{ url('/register') }}" class="btn-main" style="transform: scale(1.3); margin-top: 20px;">Join Class Sekarang!</a>
</section>

@endsection