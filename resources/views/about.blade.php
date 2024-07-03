@extends('layout.index')
@section('content')
    <style>
        .position-relative {
            position: relative;
        }

        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    <div class="about-us">
        <div class="row">
            <div class="col-lg-12">
                <img src="/profile/assets/images/about.png" class="img-fluid" alt="...">
                <h1>Judul Gambar</h1>
            </div>
        </div>
    </div>
@endsection
