<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/shapes.css') }}">
@extends('layout')
@section('content')
    <div class="container-fluid bg-black">
        <div class="row">
            <div class="col-6 text-center text-white fs-1" style="padding-top: 250px">
                Smart Mannequin <br>
                By STAS-RG And PT Pindad
            </div>
            <div class="col-6" style="box-sizing: border-box; position: relative; overflow: hidden">
                <div class="trapesium"><img src="" alt="Our Mannequin"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-black"style="height: 816px">
        <div class="row">
            <div class="col-6" style="box-sizing: border-box; position: relative; overflow: hidden">
                <div class="trapesium2"><img src="" alt="More Info"></div>
            </div>
            <div class="col-6 text-center text-white fs-1" style="padding-top: 350px">Penjelasan Singkat or <br>
                beberapa alasan gitu</div>
        </div>
    </div>
    <div class="container-fluid" style="background-color: #C4C4C4">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" style="display: flex; justify-content: center; align-items: center">
                <button type="button" class="btn btn-secondary btn-lg"
                    style="display: flex; justify-content: center; align-items: center">Instructors</button>
            </div>
            <div class="col-sm-6 text-center text-black fs-1">
                Meet Our Team
            </div>
            <div class="col-sm-2" style="display: flex; justify-content: center; align-items: center">
                <button type="button" class="btn btn-secondary btn-lg"
                    style="display: flex; justify-content: center; align-items: center">Students</button>
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
    <div class="container-fluid" style="height: 500px; background-color: #C4C4C4">
        <img src="{{ asset('img/foto_bareng.jpg') }}" style="width: 100%; height: 100%; object-fit: cover">
    </div>
    </div>

    <div class="container-fluid" style="height: 497px; background-color: #C4C4C4">
        <div class="text-center fs-1" style="border-top: 10px solid black; padding-top: 1rem"> Affiliated With</div>
        <div class="row">
            <div class="col-6"><img src="{{ asset('img/Logo-Telkom-University-Legal-Utama.png') }}"
                    style="width: 100%; height: auto"></div>
            <div class="col-6"><img src="{{ asset('img/pindad.png') }}" style="width: 80%; height: auto"></div>
        </div>
    </div>
@endsection
