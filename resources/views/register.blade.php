@extends('layouts.app')

@section('content')
<section class="about-hero-consistent reveal-on-scroll" style="background-color: var(--yellow) !important; padding: 100px 10% 60px; text-align: center; border-bottom: 5px solid var(--stroke);">
    <h1 style="font-size: 85px; font-weight: 950; line-height: 1.2; color: white; -webkit-text-stroke: 3px var(--stroke); letter-spacing: -2px; margin: 0;">
        JOIN OUR <span style="background: white; border: 5px solid var(--stroke); padding: 0 15px; display: inline-block; transform: rotate(-2deg); box-shadow: 8px 8px 0 var(--navy); color: var(--pink); -webkit-text-stroke: 0px; margin-left: 10px;">CLASS</span>
    </h1>
    <p style="font-weight: 800; color: var(--navy); margin-top: 25px; font-size: 18px;">
        Daftar dan mulai perjalanan belajar digitalmu hari ini! 🚀
    </p>
</section>

<div class="register-wrapper reveal-on-scroll">
    <form id="regForm" class="form-card" onsubmit="validateForm(event)">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" id="regNama" class="form-input" placeholder="Masukkan nama kamu...">
            <div id="errorNama" class="error-msg">Ops! Nama tidak boleh kosong ya Kia.</div>
        </div>

        <div class="form-group">
            <label>Email Aktif</label>
            <input type="email" id="regEmail" class="form-input" placeholder="contoh@email.com">
            <div id="errorEmail" class="error-msg">Format email-nya salah nih.</div>
        </div>

        <div class="form-group">
            <label>Pilih Kelas</label>
            <select id="regKelas" class="form-input">
                <option value="">-- Pilih Kelas --</option>
                <option value="Coding Dasar">Coding Dasar</option>
                <option value="UI/UX Dasar">UI/UX Dasar</option>
                <option value="Digital Literacy">Digital Literacy</option>
            </select>
            <div id="errorKelas" class="error-msg">Pilih salah satu kelas impianmu!</div>
        </div>

        <div class="form-group">
            <label>Saya setuju dengan Syarat & Ketentuan</label>
            <div style="display: flex; align-items: center; gap: 10px;">
                <input type="checkbox" id="regCheck" style="width: 25px; height: 25px; accent-color: var(--pink);">
                <span style="font-weight: 700; color: #666;">Ya, saya siap belajar!</span>
            </div>
            <div id="errorCheck" class="error-msg">Centang ini dulu ya!</div>
        </div>

        <button type="submit" class="btn-main" style="width: 100%; font-size: 20px; padding: 20px;">Daftar Sekarang </button>
    </form>
</div>

<div id="successModal" class="modal-overlay" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); z-index: 99999; align-items: center; justify-content: center;">
    <div class="modal-content" style="text-align: center;">
        <h2 style="font-size: 40px; font-weight: 950; color: var(--navy);">🎉 BERHASIL!</h2>
        <p style="font-weight: 700; color: #555; margin: 20px 0;">
            Selamat <span id="displayNama" style="color: var(--pink);"></span>!<br>
            Kamu berhasil terdaftar di kelas <span id="displayKelas" style="color: var(--pink);"></span>.
        </p>
        <div style="display: flex; gap: 15px; justify-content: center;">
            <button class="btn-main" onclick="location.reload()">Tutup</button>
            <a href="{{ url('/dashboard') }}" class="btn-main" style="background: var(--yellow); text-decoration: none;">Ke Dashboard</a>
        </div>
    </div>
</div>
@endsection