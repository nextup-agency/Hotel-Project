@extends('layout.index')
@section('content')
    <style>
        .text-details h1 {
            font-size: 48px;
            font-weight: 700;
        }

        .text-details p {
            font-size: 24px;
            padding-top: 20px;
            color: rgb(0, 0, 0, 59%)
        }

        .images {
            background-size: 100%;
            background-repeat: no-repeat;
            background-position: center bottom;
        }

        .text-details-2 {
            font-size: 30px;
            font-weight: 500;
            letter-spacing: 2px;
            color: #000;
            padding-top: 100px;
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col text-details">
                    <h1 class="text-center text-capitalize mb-5">{{ $article->title }}</h1>
                    <p class="text-center mt-5">{{ $article->news_source }} | {{ $article->created_at->format('d M Y') }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        {{-- <div class="container-sm"> --}}
        <div class="row">
            <div class="col ms-5 me-4">
                <img src="{{ Storage::url($article->image) }}" class="images" alt="{{ $article->title }}" />
                <p class="text-details-2 lh-base">{{ $article->description }}</p>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
