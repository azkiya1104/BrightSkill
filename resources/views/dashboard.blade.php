@extends('layouts.app')

@section('content')
<style>
    .db-wrapper { padding: 60px 10%; background: #fdfbf7; min-height: 100vh; font-family: 'Plus Jakarta Sans', sans-serif; }
    .db-header { background: white; border: 4px solid #000; border-radius: 40px; padding: 40px; box-shadow: 10px 10px 0 #000; margin-bottom: 40px; }
    
    .db-stats { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-bottom: 50px; }
    .stat-box { background: white; border: 3px solid #000; padding: 25px; border-radius: 25px; text-align: center; box-shadow: 6px 6px 0 #000; }
    .stat-val { font-size: 32px; font-weight: 900; color: #000; }

    .class-list-container { display: flex; flex-direction: column; gap: 20px; }
    .class-card-db { border: 4px solid #000; border-radius: 35px; padding: 30px; background: white; display: grid; grid-template-columns: 1fr 2fr 1fr; align-items: center; gap: 30px; box-shadow: 8px 8px 0 #000; }
    
    .bar-bg { background: #eee; height: 25px; border: 3px solid #000; border-radius: 20px; overflow: hidden; }
    .bar-fill { width: 0%; height: 100%; background: #FF8BA7; transition: 0.5s ease-in-out; }

    /* MODAL OVERLAY (SANGAT PENTING: Z-INDEX 999999) */
    #studyModal { 
        position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
        background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); 
        display: none; align-items: center; justify-content: center; 
        z-index: 999999 !important; 
    }
    .modal-box { background: white; width: 90%; max-width: 500px; padding: 40px; border-radius: 40px; border: 5px solid #000; position: relative; box-shadow: 15px 15px 0 #FF8BA7; }
    .materi-item { display: flex; align-items: center; gap: 15px; padding: 15px; background: #f9f9f9; border: 2px solid #000; border-radius: 15px; margin-bottom: 10px; cursor: pointer; font-weight: 800; }
</style>

<div class="db-wrapper">
    <div class="db-header">
    <h1 style="font-size: 45px; font-weight: 950; margin-bottom: 5px;">My Learning Dashboard</h1>
    <p style="font-weight: 700;">Selamat belajar kembali, <span id="userName" style="color: #FF8BA7;">Kia</span>! </p>
    </div>

    <div class="db-stats">
    <div class="stat-box"><h4>Total</h4><div class="stat-val">6</div></div>
    
    <div class="stat-box"><h4>Selesai</h4><div class="stat-val" id="finishedCount">0</div></div>
    
    <div class="stat-box"><h4>Ongoing</h4><div class="stat-val" id="ongoingCount">6</div></div>
    
    <div class="stat-box"><h4>Progress</h4><div class="stat-val" id="totalProgress">0%</div></div>
</div>  

    <div class="class-list-container">
    <h2 id="dashboardTitle" style="font-weight: 950; margin-bottom: 10px;">Daftar Materi</h2>
    <div id="dynamicClassList"></div> 
</div>
</div>

<div id="studyModal">
    <div class="modal-box">
        <span onclick="closeClassModal()" style="position: absolute; top: 15px; right: 25px; font-size: 45px; cursor: pointer; font-weight: 900;">&times;</span>
        <h2 id="modalTitle" style="font-weight: 950; margin-bottom: 10px; font-size: 28px;"></h2>
        <p style="font-weight: 700; color: #666; margin-bottom: 25px;">Centang materi untuk update progres:</p>
        
        <div class="materi-list">
            <label class="materi-item"><input type="checkbox" class="materi-cb" onchange="syncProgress()"> <span>Pengenalan Variabel</span></label>
            <label class="materi-item"><input type="checkbox" class="materi-cb" onchange="syncProgress()"> <span>Logika If & Else</span></label>
            <label class="materi-item"><input type="checkbox" class="materi-check-last" onchange="syncProgress()"> <span>Final Project</span></label>
        </div>
    </div>
</div>

<script src="{{ asset('js/script.js') }}"></script>
@endsection