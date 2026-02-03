<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightSkill - EduTech Ceria</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="cursor-glow"></div>
    <header>
        <div class="logo">BrightSkill.</div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/classes') }}">Classes</a></li>
                <li><a href="{{ url('/gallery') }}">Event</a></li>
                <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
            </ul>
        </nav>
        <a href="{{ url('/register') }}" class="btn-main">Join Class!</a>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
    <div class="footer-grid">
        <div class="footer-section">
            <h3 class="footer-brand">BrightSkill.</h3>
            <p>Platform belajar skill digital dasar yang seru, ceria, dan dirancang khusus untuk pemula! Kami hadir dengan kurikulum interaktif yang mengubah materi teknis menjadi petualangan belajar yang mudah dikuasai siapa saja.</p>
        </div>

        <div class="footer-section">
            <h3>Quick Links</h3>
            <ul style="list-style: none; padding: 0;">
                <li>Belajar Coding</li>
                <li>UI/UX Design</li>
                <li>Digital Literacy</li>
            </ul>
        </div>

        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Surabaya, Indonesia</p>
            <p style="font-weight: 800; color: var(--yellow);">hello@brightskill.edu</p>
        </div>

        <div class="footer-section">
            <h3>Follow Us</h3>
            <p>Yuk, kepoin kegiatan seru kami di sosmed!</p>
            <div class="social-links">
                <a href="#" class="social-icon" title="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="mailto:hello@brightskill.edu" class="social-icon" title="Email"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
    
    <div style="border-top: 1px solid rgba(255,255,255,0.1); margin-top: 50px; padding-top: 30px;">
        <p style="text-align: center; opacity: 0.7;">&copy; 2026 BrightSkill Platform.</p>
    </div>
</footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>