<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/shapes.css') }}">
@extends('layout')
@section('content')
    <div class="container-fluid bg-black"style="height: 945px">
        <div class="row">
            <div class="col-6 text-center text-white fs-1" style="height: 1000px; padding-top: 250px">
                Smart Mannequin <br>
                By STAS-RG And PT Pindad
            </div>
            <div class="col-6" style="box-sizing: border-box; position: relative; overflow: hidden">
                <div class="trapesium"><img src="" alt="Our Mannequin"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid"style="height: 1000px; background-color: #C4C4C4"></div>
    <div class="row" style="height: 80px; background-color: #C4C4C4">
        <div class="col-sm-1"></div>
        <div class="col-sm-2 fs-3 rounded-rectangle" style="display: flex; align-items: center; margin-top: 1rem">
            <div style="display: flex; height: 80px; align-items: center; float: right">
                Instructors</div>
        </div>
        <div class="col-sm-6 text-center text-black fs-1">
            Meet Our Team
        </div>
        <div class="col-sm-2 fs-3 rounded-rectangle" style="display: flex; align-items: center; margin-top: 1rem">
            <div style="display: flex; height: 80px; align-items: center; float: right">
                Students</div>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <div class="row" style="height: 500px; background-color: #C4C4C4">
        <img src="{{ asset('img/foto_bareng.jpg') }}" style="width: 100%; height: 100%; object-fit: cover">
    </div>
    </div>

    <div class="row" style="height: 497px; background-color: #C4C4C4">
        <div class="text-center fs-1" style="border-top: 10px solid black; margin-bottom: -1rem"> Affiliated With</div>
        <div class="col-6"><img src="{{ asset('img/Logo-Telkom-University-Legal-Utama.png') }}"
                style="width: 100%; height: auto"></div>
        <div class="col-6"><img src="{{ asset('img/pindad.png') }}" style="width: 80%; height: auto"></div>
    </div>
@endsection
