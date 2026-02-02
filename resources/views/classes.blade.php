@extends('layouts.app') @section('content')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<section class="classes-banner">
    <h1>Eksplorasi Kelas <br> <span>Masa Depanmu!</span></h1>
    
    <p class="sub-heading-google">
        Temukan jalur belajar yang seru dan kuasai skill digital paling dicari saat ini bareng mentor ahli.
    </p>
    
    <div class="filter-container">
        <button class="filter-btn active" onclick="filterClasses('all', this)">All</button>
        <button class="filter-btn" onclick="filterClasses('coding', this)">Coding</button>
        <button class="filter-btn" onclick="filterClasses('uiux', this)">UI/UX</button>
        <button class="filter-btn" onclick="filterClasses('literacy', this)">Digital Literacy</button>
    </div>
</section>

<div class="classes-grid">
    <div class="class-card-clean" data-category="coding">
        <div class="badge-path"><i class="fas fa-code"></i> Learning Path</div>
        <h3>Logika Dasar Programming</h3>
        <p>Fondasi utama pemrograman untuk melatih cara berpikir komputasional Kia.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="coding">
        <div class="badge-path"><i class="fas fa-file-code"></i> Learning Path</div>
        <h3>Struktur Data Dasar</h3>
        <p>Belajar cara mengelola data secara efisien dalam aplikasi digital modern.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="coding">
        <div class="badge-path"><i class="fas fa-globe"></i> Learning Path</div>
        <h3>Web Development Dasar</h3>
        <p>Langkah awal membangun website interaktif menggunakan HTML dan CSS.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="coding">
        <div class="badge-path"><i class="fas fa-js"></i> Learning Path</div>
        <h3>JavaScript Mastery</h3>
        <p>Berikan "nyawa" pada websitemu dengan logika JavaScript yang dinamis.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="coding">
        <div class="badge-path"><i class="fas fa-database"></i> Learning Path</div>
        <h3>Database Management</h3>
        <p>Pahami cara menyimpan dan memanggil data dari sistem database terpusat.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="coding">
        <div class="badge-path"><i class="fas fa-mobile-alt"></i> Learning Path</div>
        <h3>Mobile App Logic</h3>
        <p>Pelajari bagaimana aplikasi di smartphone Kia bekerja di balik layar.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>

    <div class="class-card-clean" data-category="uiux">
        <div class="badge-path" style="background:#FF8BA7;"><i class="fas fa-paint-brush"></i> Learning Path</div>
        <h3>Creative Visual Design</h3>
        <p>Belajar estetika dan teori warna untuk tampilan aplikasi yang cantik.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="uiux">
        <div class="badge-path" style="background:#FF8BA7;"><i class="fas fa-user-friends"></i> Learning Path</div>
        <h3>User Research Dasar</h3>
        <p>Pahami kebutuhan pengguna agar Kia bisa membuat solusi desain yang tepat.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="uiux">
        <div class="badge-path" style="background:#FF8BA7;"><i class="fas fa-vector-square"></i> Learning Path</div>
        <h3>Wireframing & Layout</h3>
        <p>Membuat kerangka aplikasi sebelum masuk ke tahap desain visual tinggi.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="uiux">
        <div class="badge-path" style="background:#FF8BA7;"><i class="fas fa-mouse-pointer"></i> Learning Path</div>
        <h3>Interactive Prototype</h3>
        <p>Ubah desain statis menjadi prototype yang bisa diklik dan dirasakan user.</p>
       <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="uiux">
        <div class="badge-path" style="background:#FF8BA7;"><i class="fas fa-check-circle"></i> Learning Path</div>
        <h3>Usability Testing</h3>
        <p>Uji desain Kia langsung ke user asli untuk mendapatkan feedback nyata.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="uiux">
        <div class="badge-path" style="background:#FF8BA7;"><i class="fas fa-layer-group"></i> Learning Path</div>
        <h3>Design System Dasar</h3>
        <p>Belajar cara membuat aset desain yang konsisten untuk skala besar.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>

    <div class="class-card-clean" data-category="literacy">
        <div class="badge-path" style="background:var(--yellow);"><i class="fas fa-shield-alt"></i> Learning Path</div>
        <h3>Data Safety Basics</h3>
        <p>Lindungi privasi Kia dari ancaman digital di dunia internet.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="literacy">
        <div class="badge-path" style="background:var(--yellow);"><i class="fas fa-search"></i> Learning Path</div>
        <h3>Digital Intelligence</h3>
        <p>Meningkatkan kemampuan literasi dalam memilah informasi yang benar.</p>
       <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="literacy">
        <div class="badge-path" style="background:var(--yellow);"><i class="fas fa-brain"></i> Learning Path</div>
        <h3>AI Literacy for Student</h3>
        <p>Cara cerdas menggunakan kecerdasan buatan untuk membantu belajar.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="literacy">
        <div class="badge-path" style="background:var(--yellow);"><i class="fas fa-comments"></i> Learning Path</div>
        <h3>Netiquette (Etika Digital)</h3>
        <p>Seni berkomunikasi yang sopan dan profesional di berbagai platform.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="literacy">
        <div class="badge-path" style="background:var(--yellow);"><i class="fas fa-lock"></i> Learning Path</div>
        <h3>Cybersecurity Awareness</h3>
        <p>Pahami teknik dasar perlindungan perangkat dari malware dan phising.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
    <div class="class-card-clean" data-category="literacy">
        <div class="badge-path" style="background:var(--yellow);"><i class="fas fa-briefcase"></i> Learning Path</div>
        <h3>Future Digital Jobs</h3>
        <p>Eksplorasi karier masa depan yang lahir dari kemajuan teknologi digital.</p>
        <a href="{{ url('/register') }}?class=Coding Dasar" class="btn-detail-circle">
        <i class="fas fa-arrow-right"></i>
    </a>
    </div>
</div>

@endsection