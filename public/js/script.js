document.addEventListener('DOMContentLoaded', () => {
    // 1. FIXED CURSOR: Tambahkan pengaman agar tidak error jika class tidak ada
    const cursor = document.querySelector('.cursor-glow');
    
    if (cursor) {
        document.addEventListener('mousemove', (e) => {
            // Gunakan transform alih-alih top/left untuk performa lebih baik
            cursor.style.transform = `translate(${e.clientX - 15}px, ${e.clientY - 15}px)`;
            cursor.style.display = 'block';
        });

        // Pastikan kursor tetap membesar saat hover di dalam modal juga
        document.querySelectorAll('a, button, .stat-card, .materi-item, input').forEach(item => {
            item.addEventListener('mouseenter', () => {
                cursor.style.width = '50px';
                cursor.style.height = '50px';
                cursor.style.backgroundColor = 'var(--pink)';
            });
            item.addEventListener('mouseleave', () => {
                cursor.style.width = '30px';
                cursor.style.height = '30px';
                cursor.style.backgroundColor = 'var(--yellow)';
            });
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

// DATA DUMMY MATERI (6 Kategori tiap Kelas)
const materiData = {
    'UI/UX Dasar': ['Research User', 'Wireframing', 'Visual Design', 'Prototyping', 'Usability Testing', 'Final UI Design'],
    'Coding Dasar': ['HTML Dasar', 'CSS Layouting', 'Javascript Logic', 'DOM Manipulation', 'Git & Github', 'Final Web Project'],
    'Digital Literacy': ['Internet Safety', 'Data Privacy', 'Cyber Ethics', 'Digital Tools', 'Social Media Wisdom', 'Tech Trends 2026']
};

document.addEventListener('DOMContentLoaded', () => {
    // 1. Ambil Data dari Registrasi
    const savedName = localStorage.getItem('userName') || 'Kia';
    const savedKelas = localStorage.getItem('userKelas') || 'UI/UX Dasar';

    // 2. Pasang Nama
    const nameLabel = document.getElementById('userName');
    if(nameLabel) nameLabel.innerText = savedName;

    // 3. Render 6 Materi Otomatis
    const container = document.getElementById('dynamicClassList');
    const listMateri = materiData[savedKelas] || materiData['UI/UX Dasar'];

    if(container) {
        container.innerHTML = ""; // Bersihkan kontainer
        listMateri.forEach((materi, index) => {
            const id = index + 1;
            container.innerHTML += `
                <div class="class-card-db">
                    <div>
                        <h3 style="font-weight: 900; font-size: 20px;">${materi}</h3>
                        <span id="statusText-${id}" style="font-weight: 800; color: #888; font-size: 13px;">ONGOING</span>
                    </div>
                    <div class="bar-bg">
                        <div id="bar-${id}" class="bar-fill"></div>
                    </div>
                    <button class="btn-main" onclick="openClassModal('${materi}', ${id})" style="width: 100%; cursor: pointer;">Lanjut Belajar</button>
                </div>
            `;
        });
    }
});

let activeId = null;
function openClassModal(title, id) {
    activeId = id;
    document.getElementById('modalTitle').innerText = title;
    document.getElementById('studyModal').style.display = 'flex';
}

function syncProgress() {
    const checkboxes = document.querySelectorAll('.materi-cb, .materi-check-last');
    const checked = document.querySelectorAll('.materi-cb:checked, .materi-check-last:checked');
    
    if (checkboxes.length === 0) return;
    let percent = Math.round((checked.length / checkboxes.length) * 100);
    
    const targetBar = document.getElementById('bar-' + activeId);
    const targetStatus = document.getElementById('statusText-' + activeId);

    if (targetBar) targetBar.style.width = percent + "%";

    if (targetStatus) {
        if (percent === 100) {
            targetStatus.innerText = "COMPLETED ✅";
            targetStatus.style.color = "#FF8BA7";
        } else {
            targetStatus.innerText = "ONGOING (" + percent + "%)";
        }
    }
    updateOverallProgress();
}

function updateOverallProgress() {
    const allBars = document.querySelectorAll('.bar-fill');
    let totalPercent = 0;
    let completedClasses = 0;

    allBars.forEach(bar => {
        // Ambil nilai width dari style (misal "100%") lalu ubah jadi angka 100
        let currentVal = parseInt(bar.style.width) || 0;
        totalPercent += currentVal;

        // Jika bar sudah 100%, hitung sebagai kelas yang SELESAI
        if (currentVal === 100) {
            completedClasses++;
        }
    });

    // 1. Hitung Rata-rata Progress (Total % dibagi jumlah materi)
    let averageProgress = Math.round(totalPercent / allBars.length);
    const progressLabel = document.getElementById('totalProgress');
    if (progressLabel) progressLabel.innerText = averageProgress + "%";

    // 2. Update Angka SELESAI
    const finishedLabel = document.getElementById('finishedCount');
    if (finishedLabel) finishedLabel.innerText = completedClasses;

    // 3. Update Angka ONGOING (Total dikurangi yang selesai)
    const ongoingLabel = document.getElementById('ongoingCount');
    if (ongoingLabel) {
        ongoingLabel.innerText = allBars.length - completedClasses;
    }

    console.log("Stats Updated: " + completedClasses + " Selesai, Average: " + averageProgress + "%");
}

function validateForm(event) {
    event.preventDefault(); // Mencegah reload halaman

    // Ambil Data
    const nama = document.getElementById('regNama');
    const email = document.getElementById('regEmail');
    const kelas = document.getElementById('regKelas');
    const check = document.getElementById('regCheck');
    const card = document.querySelector('.form-card');

    let isValid = true;

    // Reset Error
    document.querySelectorAll('.error-msg').forEach(el => el.style.display = 'none');
    card.classList.remove('shake');

    // Cek Nama
    if (nama.value.trim() === "") {
        document.getElementById('errorNama').style.display = 'block';
        isValid = false;
    }

    // Cek Email sederhana
    if (!email.value.includes('@')) {
        document.getElementById('errorEmail').style.display = 'block';
        isValid = false;
    }

    // Cek Kelas
    if (kelas.value === "") {
        document.getElementById('errorKelas').style.display = 'block';
        isValid = false;
    }

    // Cek Checkbox
    if (!check.checked) {
        document.getElementById('errorCheck').style.display = 'block';
        isValid = false;
    }

    // Eksekusi jika Valid
    if (isValid) {
        localStorage.setItem('userName', nama.value);
        localStorage.setItem('userKelas', kelas.value);

        document.getElementById('displayNama').innerText = nama.value;
        document.getElementById('displayKelas').innerText = kelas.value;
        document.getElementById('successModal').style.display = 'flex';
    } else {
        // Efek Getar kalau error
        setTimeout(() => card.classList.add('shake'), 10);
    }
}

//BUTTON GALLERY
// Fungsi untuk membuka modal event dengan data dinamis
function openEventModal(title, desc, location, time) {
    const modal = document.getElementById('eventModal');
    
    // Isi konten modal
    document.getElementById('modalEventTitle').innerText = title;
    document.getElementById('modalEventDesc').innerText = desc;
    document.getElementById('modalEventLoc').innerText = location;
    document.getElementById('modalEventTime').innerText = time;
    
    // Tampilkan modal
    if (modal) {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Stop scroll halaman belakang
    }
}

// Fungsi untuk menutup modal event
function closeEventModal() {
    const modal = document.getElementById('eventModal');
    if (modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Aktifkan scroll kembali
    }
}