<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@extends('layout')
@section('content')
    {{-- <div class="row">
        <div class="col-7 text-center text-white" style="background-color: #000000">Hello World</div>
        <div class="col-5" style="background-color: #f02f02">
            <div class="trapezoid"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-5" style="background-color: #C4C4C4"></div>
        <div class="col-7" style="background-color: #000">
            <div class="trapezoid"></div>
        </div>
    </div> --}}
    <div class="container-fluid" style="background-color: #C4C4C4; height: 576px;">
        <div class="row" style="height: 80px">
            <div class="col-sm-1"></div>
            <div class="col-sm-1">
                {{-- <div class="rounded-rectangle text-center" style="border: 5px solid red">Instructors</div> --}}
            </div>
            {{-- <div class="col-sm-8 text-center text-black fs-1" style="border: 5px solid red">
                Meet Our Team
            </div> --}}
            <div class="col-sm-1">
                {{-- <div class="rounded-rectangle text-center" style="height: 50%; border: 5px solid red">
                    Students</div> --}}
            </div>
            <div class="col-sm-1"></div>
        </div>
        <div class="container-fluid" style="height: 497px">
            <img src="{{ asset('img/foto_bareng.jpg') }}" style="width: 100%; height: 100%; object-fit: cover">
        </div>
    </div>
@endsection
