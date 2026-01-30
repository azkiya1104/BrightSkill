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
                <p>Pelajari fondasi utama dalam dunia IT. Dari variabel hingga struktur kontrol, dirancang khusus untuk kamu yang ingin mulai ngoding dengan seru!</p>
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
                <p>Pahami cara kerja internet secara mendalam. Belajar cara melindungi data pribadi kamu di era digital supaya tetap aman dan tetap cerdas.</p>
            </div>
            <a href="{{ url('/classes') }}" class="btn-circle" style="background: var(--yellow);">
                <span>→</span>
            </a>
        </div>
    </div>
</section>

<section class="section-clean-path reveal-on-scroll">
    <h2 style="font-size: 48px; font-weight: 900; margin-bottom: 20px; text-align: center; color: var(--navy);">Langkah Belajarmu</h2>
    <p style="text-align: center; color: #666; font-weight: 600; margin-bottom: 70px; max-width: 600px; margin-left: auto; margin-right: auto;">
        Ikuti alur terstruktur kami untuk membantu kamu menguasai keahlian digital masa depan secara efektif.
    </p>
    
    <div class="path-container">
        <div class="path-step">
            <div class="step-card-clean">
                <span class="step-badge">Langkah 01</span>
                <h3>Registrasi Akun Siswa</h3>
                <p>Mulai dengan mendaftarkan akun untuk mengakses seluruh ekosistem pembelajaran kami.</p>
            </div>
            <div class="path-line"></div>
        </div>

        <div class="path-step">
            <div class="step-card-clean">
                <span class="step-badge">Langkah 02</span>
                <h3>Eksplorasi Kurikulum</h3>
                <p>Pilih jalur pembelajaran yang sesuai dengan minat dan tujuan karir digital Kia.</p>
            </div>
            <div class="path-line"></div>
        </div>

        <div class="path-step">
            <div class="step-card-clean">
                <span class="step-badge">Langkah 03</span>
                <h3>Monitoring Progres</h3>
                <p>Gunakan Dashboard interaktif untuk memantau pencapaian dan statistik modul Kia.</p>
            </div>
            <div class="path-line"></div>
        </div>

        <div class="path-step">
            <div class="step-card-clean">
                <span class="step-badge">Langkah 04</span>
                <h3>Sertifikasi Akhir</h3>
                <p>Selesaikan evaluasi akhir untuk mendapatkan kredensial resmi dari BrightSkill.</p>
            </div>
        </div>
    </div>
</section>

<section class="section-padding reveal-on-scroll dashboard-preview section-bg-page" style="border-top: 5px solid var(--stroke);">
    <div class="grid-2">
        <div class="laptop-wrapper">
            <div class="laptop-frame">
                <div class="laptop-screen">
                    <div style="background: var(--white); padding: 30px; border: 4px solid var(--stroke); border-radius: 25px; box-shadow: 8px 8px 0px var(--navy); width: 90%;">
                        <h3 style="font-weight: 900; font-size: 24px; margin-bottom: 15px;">Your Energy Level</h3>
                        <div class="progress-bar" style="height: 20px;"><div class="progress-fill" style="width: 75%;"></div></div>
                        <p style="font-weight: 800; font-size: 16px; margin-top: 10px;">Rank: <span style="color: var(--pink);">Superstar Learner</span></p>
                    </div>
                </div>
            </div>
            <div class="laptop-base"></div>
        </div>

        <div style="padding-left: 20px;">
            <h2 style="font-size: 55px; font-weight: 900; line-height: 1.1; color: var(--navy);">
                Dashboard <br> <span style="color: var(--pink); text-shadow: 3px 3px 0px var(--stroke);">Keren</span> Menantimu!
            </h2>
            <p style="font-size: 20px; margin-top: 25px; font-weight: 600; color: #555; line-height: 1.6;">
                Pantau progres belajarmu dengan tampilan yang interaktif, penuh reward, dan motivasi harian untuk kamu.
            </p>
            <div style="margin-top: 35px;">
                <a href="#" class="btn-main">Coba Demo Dashboard</a>
            </div>
        </div>
    </div>
</section>

<section class="section-padding reveal-on-scroll section-white" style="border-top: 5px solid var(--stroke);">
    <div class="testimonial-video-grid">
        
        <div class="testimonial-content">
            <h2 class="testimonial-quote">
                "BrightSkill ngebantu aku buat <span>level up</span> skill digital dengan cara yang paling seru!"
            </h2>
            <div class="testimonial-author">
                <p>— Charles Leclerc</p>
                <p style="font-size: 16px; font-weight: 600; opacity: 0.7;">Fullstack Developer Enthusiast</p>
            </div>
            <div style="margin-top: 40px;">
                <a href="#" class="btn-main" style="background: var(--blue);">Lihat Cerita Lainnya</a>
            </div>
        </div>

        <div class="video-container-mockup" style="position: relative; cursor: pointer;" onclick="playStopVideo()">
            <div id="playBtnCenter" class="play-btn-overlay">▶</div>
            
            <video id="vlogVideo" width="100%" playsinline webkit-playsinline>
                <source src="{{ asset('video/wawancara.mp4') }}" type="video/mp4">
                Browser tidak mendukung video.
            </video>
        </div>

    </div>
</section>

<section class="section-hero-cta reveal-on-scroll">
    <div class="cta-decoration" style="top: 10%; left: 5%;">★</div>
    <div class="cta-decoration" style="bottom: 10%; right: 5%; color: var(--pink);">✦</div>
    <div class="cta-decoration" style="top: 40%; left: 15%; font-size: 150px;">〰</div>

    <h2 class="cta-title">
        Siap Jadi <br> <span>Digital Hero?</span>
    </h2>
    
    <div style="margin-top: 50px;">
        <a href="{{ url('/register') }}" class="btn-cta-hero">
            Join Class Sekarang!
        </a>
    </div>

    <p style="margin-top: 30px; font-weight: 800; color: var(--navy); opacity: 0.7; font-size: 18px;">
        Bergabunglah dengan ribuan siswa lainnya di BrightSkill.
    </p>
</section>

@endsection