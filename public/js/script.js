document.addEventListener('DOMContentLoaded', () => {
    // 1. FIXED CURSOR: Tambahkan pengaman agar tidak error jika class tidak ada
    const cursor = document.querySelector('.cursor-glow');
    
    if (cursor) {
        document.addEventListener('mousemove', (e) => {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
            cursor.style.display = 'block';
        });

        document.querySelectorAll('a, button, .stat-card, .btn-main').forEach(item => {
            item.addEventListener('mouseenter', () => cursor.style.transform = 'scale(2.5)');
            item.addEventListener('mouseleave', () => cursor.style.transform = 'scale(1)');
        });
    }

    // 2. FIXED ANIMATION: Intersection Observer
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

    // 3. FIXED VIDEO ENDED: Pengaman agar tidak error di halaman tanpa video
    const videoElem = document.getElementById("vlogVideo");
    if (videoElem) {
        videoElem.onended = function() {
            const btn = document.getElementById("playBtnCenter");
            if (btn) {
                btn.style.opacity = "1";
                btn.style.visibility = "visible";
            }
        };
    }
});

/* ========================================
   FUNGSI GLOBAL (TIDAK BERUBAH)
   ======================================== */

function changeSkillClean(label, element, color) {
    const visual = document.getElementById('dynamic-visual');
    const items = document.querySelectorAll('.info-item');
    if (!visual || !element) return; // Pengaman

    items.forEach(item => item.classList.remove('active'));
    element.classList.add('active');

    visual.style.opacity = '0';
    visual.style.transform = 'scale(0.8) rotate(-5deg)';

    setTimeout(() => {
        visual.innerText = label;
        visual.style.color = color;
        visual.style.opacity = '1';
        visual.style.transform = 'scale(1) rotate(0deg)';
    }, 250);
}

function playStopVideo() {
    const video = document.getElementById("vlogVideo");
    const btn = document.getElementById("playBtnCenter");
    if (!video || !btn) return; // Pengaman

    if (video.paused) {
        video.play();
        btn.style.opacity = "0";
        btn.style.visibility = "hidden";
    } else {
        video.pause();
        btn.style.opacity = "1";
        btn.style.visibility = "visible";
    }
}

// 4. FIXED CLASSES LOGIC
function filterClasses(category, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    if(btn) btn.classList.add('active');

    const cards = document.querySelectorAll('.class-card-clean');
    cards.forEach(card => {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.style.display = 'block';
            setTimeout(() => card.style.opacity = '1', 10);
        } else {
            card.style.opacity = '0';
            setTimeout(() => card.style.display = 'none', 300);
        }
    });
}

// 5. FIXED MODAL LOGIC (DASHBOARD & CLASSES)
function openClassModal(title, id) {
    // Digunakan untuk Dashboard & Classes
    const titleElem = document.getElementById('modalTitle');
    const modalElem = document.getElementById('classModal') || document.getElementById('studyModal');
    
    if (titleElem) titleElem.innerText = title;
    if (modalElem) {
        modalElem.classList.add('active');
        // Jika pakai inline style (seperti dashboard fix terakhir)
        modalElem.style.display = 'flex'; 
    }
    document.body.style.overflow = 'hidden';
}

function closeClassModal() {
    const modalElem = document.getElementById('classModal') || document.getElementById('studyModal');
    if (modalElem) {
        modalElem.classList.remove('active');
        modalElem.style.display = 'none';
    }
    document.body.style.overflow = 'auto';
}

// 6. GALLERY LOGIC (TIDAK BERUBAH)
function filterGallery(category, btn) {
    document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
    if(btn) btn.classList.add('active');

    const items = document.querySelectorAll('.gallery-item');
    items.forEach(item => {
        if (category === 'all' || item.getAttribute('data-category') === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}

function openGalleryModal(title, desc, imgSrc) {
    const t = document.getElementById('modalGalleryTitle');
    const d = document.getElementById('modalGalleryDesc');
    const i = document.getElementById('modalImage');
    const m = document.getElementById('galleryModal');

    if (t) t.innerText = title;
    if (d) d.innerText = desc;
    if (i) i.src = imgSrc;
    if (m) m.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeGalleryModal() {
    const m = document.getElementById('galleryModal');
    if (m) m.classList.remove('active');
    document.body.style.overflow = 'auto';
}

console.log("BrightSkill Pro Script Loaded & Error Fixed! 🚀");

let activeId = null; // Variabel global untuk menyimpan ID kelas yang sedang dibuka

function openClassModal(title, id) {
    activeId = id; // Menyimpan ID (misal: 1) agar syncProgress tahu bar mana yang diupdate
    const modal = document.getElementById('studyModal');
    const titleHeader = document.getElementById('modalTitle');

    if (modal && titleHeader) {
        titleHeader.innerText = title;
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden';
    }
}

function syncProgress() {
    // 1. Ambil semua checkbox di dalam modal
    const checkboxes = document.querySelectorAll('.materi-cb, .materi-check-last');
    const checked = document.querySelectorAll('.materi-cb:checked, .materi-check-last:checked');
    
    // 2. Hitung persentase
    if (checkboxes.length === 0) return;
    let percent = Math.round((checked.length / checkboxes.length) * 100);
    
    console.log("Progres Kelas " + activeId + " adalah: " + percent + "%");

    // 3. Update Bar Pink di Halaman Dashboard
    const targetBar = document.getElementById('bar-' + activeId);
    const targetStatus = document.getElementById('statusText-' + activeId);
    const totalProgressTxt = document.getElementById('totalProgress');

    if (targetBar) {
        targetBar.style.width = percent + "%"; // Menggerakkan bar pink
    }

    if (totalProgressTxt) {
        totalProgressTxt.innerText = percent + "%"; // Update angka di ringkasan atas
    }

    // 4. Update Teks Status
    if (targetStatus) {
        if (percent === 100) {
            targetStatus.innerText = "COMPLETED ✅";
            targetStatus.style.color = "#FF8BA7";
            const finishCount = document.getElementById('finishedCount');
            if (finishCount) finishCount.innerText = "1";
        } else {
            targetStatus.innerText = "ONGOING (" + percent + "%)";
            targetStatus.style.color = "#888";
        }
    }
}