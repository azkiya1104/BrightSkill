document.addEventListener('DOMContentLoaded', () => {
    const cursor = document.querySelector('.cursor-glow');
    
    // Smooth Custom Cursor
    document.addEventListener('mousemove', (e) => {
        cursor.style.left = e.clientX + 'px';
        cursor.style.top = e.clientY + 'px';
        cursor.style.display = 'block';
    });

    // Cursor Scale on Hover
    document.querySelectorAll('a, button, .stat-card').forEach(item => {
        item.addEventListener('mouseenter', () => cursor.style.transform = 'scale(2.5)');
        item.addEventListener('mouseleave', () => cursor.style.transform = 'scale(1)');
    });

    // Observer for Animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const fill = entry.target.querySelector('.progress-fill');
                if (fill) fill.style.width = '85%';
                entry.target.style.animation = "fadeInUp 0.8s forwards";
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.reveal-on-scroll').forEach(el => {
        el.style.opacity = "0";
        observer.observe(el);
    });

    
});
// 
// GRID KENAPA BRIGHTSKILL
/**
 * Fungsi untuk Update Visual Text dan Warna
 * @param {string} textContent - Teks yang akan tampil di kiri
 * @param {HTMLElement} element - Elemen yang di klik
 * @param {string} colorCode - Warna spesifik untuk teks tersebut
 */
function changeSkillClean(label, element, color) {
    const visual = document.getElementById('dynamic-visual');
    const items = document.querySelectorAll('.info-item');

    // Reset status aktif
    items.forEach(item => item.classList.remove('active'));
    element.classList.add('active');

    // Efek transisi borderless text
    visual.style.opacity = '0';
    visual.style.transform = 'scale(0.8) rotate(-5deg)';

    setTimeout(() => {
        visual.innerText = label;
        visual.style.color = color;
        visual.style.opacity = '1';
        visual.style.transform = 'scale(1) rotate(0deg)';
    }, 250);
}