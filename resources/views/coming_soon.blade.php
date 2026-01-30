@extends('layouts.app')

@section('content')
<section class="section-padding" style="text-align: center; min-height: 80vh; display: flex; flex-direction: column; justify-content: center; align-items: center; background: var(--bg-page);">
    <h1 style="font-size: 120px; margin-bottom: 20px;">🚧</h1>
    <h2 class="main-heading-google" style="font-size: 50px;">Sowry! <br> <span>I'll update this soon!</span></h2>
    <p style="font-size: 20px; font-weight: 600; color: #666; margin-top: 20px; max-width: 500px;">
        Sabar ya!, halamannya lagi dimasak biar makin mantap. Balik lagi nanti ya! ✨
    </p>
    <div style="margin-top: 40px;">
        <a href="{{ url('/') }}" class="btn-main">Kembali ke Beranda</a>
    </div>
</section>
@endsection