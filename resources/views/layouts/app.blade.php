<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrightSkill 🌈 - EduTech Ceria</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
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
                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
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
                <h3>BrightSkill🌈</h3>
                <p>Platform belajar skill digital dasar yang seru, ceria, dan dirancang khusus untuk pemula!</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul style="list-style: none;">
                    <li>Belajar Coding</li>
                    <li>UI/UX Design</li>
                    <li>Digital Literacy</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Contact Us</h3>
                <p>hello@brightskill.edu</p>
                <p>Surabaya, Indonesia</p>
            </div>
        </div>
        <p style="text-align: center; margin-top: 30px; opacity: 0.7;">&copy; 2026 BrightSkill Platform.</p>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>