@extends('layout.index')
@section('content')
    <style>
        .page-about-3 {
            background-image: url(/profile/assets/images/articles.png);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center bottom;
            height: 435px;
            width: 731px;
            margin-left: 60px;
        }

        .about-card {
            margin-left: 60px;
            margin-right: 60px;
        }

        .card-body {
            background: rgb(204, 204, 204, 17%);
        }


        .box {
            width: 801px;
            height: 308px;
            background-color: #ffffff;
            margin-left: 85%;
            margin-top: 60px;
        }

        .box h1 {
            color: #000;
            font-size: 32px;
            padding-top: 30px;
            margin-left: 30px;
            margin-bottom: 30px;
            font-weight: 600;
        }

        .box p {
            font-size: 20px;
            margin-left: 30px;
            font-weight: 500;
        }

        .box .date {
            font-weight: 400;
            margin-top: 30px;
        }

        .card-body h5 {
            color: #000;
        }
    </style>
    <div class="section">
        <a href="{{ route('frontend.articleDetails') }}">
            <div class="best-deal">
                {{-- <div class="container"> --}}
                <div class="page-about-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <h1>
                                    Twin Tower Union Square Begin to be Built in Harbour Bay, the Highest Sky Garden in
                                    Batam
                                </h1>
                                <p>
                                    The latest property project from PT Citra Buana Prakarsa, Union Square Office and
                                    Residences Twin Tower, is under construction.
                                </p>
                                <p class="date">
                                    02 Oct 2022
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    {{-- </div> --}}
    </div>

    <div class="section about-card">
        <div class="row row-cols-1 row-cols-md-2 g-6">
            <div class="col">
                <a href="#">
                    <div class="card h-100">
                        <img src="/profile/assets/images/Articles-1.png" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title mb-3">Groundbreaking Union Square Harbour Bay Downtown, 'Where Luxury
                                Living
                                Reaches New Heights'</h5>
                            <p class="card-text mb-3">
                                PT Citra Buana Prakarsa menggelar seremoni groundbreaking Union Square, Office and
                                Residences
                                Twin Tower. Terdiri dari 37 lantai, proyek properti ini merupakan proyek terbaru di kawasan
                                terpadu Harbour Bay Downtown..
                            </p>
                            <p class="date">
                                01 Oct 2022
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="card h-100">
                        <img src="/profile/assets/images/Articles-1.png" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title mb-3">Groundbreaking Union Square Harbour Bay Downtown, 'Where Luxury
                                Living
                                Reaches New Heights'</h5>
                            <p class="card-text mb-3">
                                PT Citra Buana Prakarsa menggelar seremoni groundbreaking Union Square, Office and
                                Residences
                                Twin Tower. Terdiri dari 37 lantai, proyek properti ini merupakan proyek terbaru di kawasan
                                terpadu Harbour Bay Downtown..
                            </p>
                            <p class="date">
                                01 Oct 2022
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="card h-100">
                        <img src="/profile/assets/images/Articles-1.png" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title mb-3">Groundbreaking Union Square Harbour Bay Downtown, 'Where Luxury
                                Living
                                Reaches New Heights'</h5>
                            <p class="card-text mb-3">
                                PT Citra Buana Prakarsa menggelar seremoni groundbreaking Union Square, Office and
                                Residences
                                Twin Tower. Terdiri dari 37 lantai, proyek properti ini merupakan proyek terbaru di kawasan
                                terpadu Harbour Bay Downtown..
                            </p>
                            <p class="date">
                                01 Oct 2022
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="#">
                    <div class="card h-100">
                        <img src="/profile/assets/images/Articles-1.png" class="card-img-top"
                            alt="Hollywood Sign on The Hill" />
                        <div class="card-body">
                            <h5 class="card-title mb-3">Groundbreaking Union Square Harbour Bay Downtown, 'Where Luxury
                                Living
                                Reaches New Heights'</h5>
                            <p class="card-text mb-3">
                                PT Citra Buana Prakarsa menggelar seremoni groundbreaking Union Square, Office and
                                Residences
                                Twin Tower. Terdiri dari 37 lantai, proyek properti ini merupakan proyek terbaru di kawasan
                                terpadu Harbour Bay Downtown..
                            </p>
                            <p class="date">
                                01 Oct 2022
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection
