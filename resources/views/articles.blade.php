@extends('layout.index')
@section('content')
    <style>
        .about-card {
            margin-left: 60px;
            margin-right: 60px;
        }

        .card-title {
            font-size: 27px;
            font-weight: 600;
        }

        .card-text {
            font-size: 20px;
            font-weight: 400;
            color: #000;
        }

        .card-body {
            background: rgb(204, 204, 204, 17%);
        }

        .card-body h5 {
            color: #000;
        }

        .articles {
            background-color: rgb(217, 217, 217, 17%);
            margin-top: 50px;
            padding: 30px;
        }


        .section-box h1 {
            color: #000;
            padding-top: 20px;

        }

        .section-box p {
            margin-top: 10px;
        }


        .card-body .date {
            font-weight: 400;
            margin-top: 30px;
            color: rgb(0, 0, 0, 59%);
        }

        @media (min-width: 992px) {
            .gambar-2 {
                width: 731px;
                height: 435px;
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center bottom;

            }

            .gambar-3 {
                height: 334px;
                background-size: 100%;
                background-repeat: no-repeat;
                background-position: center bottom;

            }

            .section-box {
                background-color: #ffffff;
                margin-top: 70px;
                height: 308px;
            }

            .section-box h1 {
                color: #000;
                font-size: 32px;
                padding-top: 30px;
                margin-left: 30px;
                margin-bottom: 30px;
                font-weight: 600;
            }

            .section-box p {
                font-size: 20px;
                margin-left: 30px;
                font-weight: 400;
                color: #000;
            }

            .section-box .date {
                font-weight: 400;
                margin-top: 30px;
                color: rgb(0, 0, 0, 59%);
            }

            .card-body .date {
                font-size: 20px;
                font-weight: 400;
                margin-top: 30px;
                color: rgb(0, 0, 0, 59%);
            }

        }
    </style>

    <div class="articles">
        @php
            $latestArticle = $articles->sortByDesc('created_at')->first();
            $remainingArticles = $articles->sortByDesc('created_at')->skip(1); // Ambil 2 artikel berikutnya setelah artikel terbaru
        @endphp

        @if ($latestArticle)
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-md-5">
                        <a href="{{ route('frontend.articleDetails', ['id' => $latestArticle->id]) }}">
                            <img src="{{ Storage::url($latestArticle->image) }}" class="gambar-2">
                        </a>
                    </div>
                    <div class="col-12 col-md-7">
                        <div class="container">
                            <a href="{{ route('frontend.articleDetails', ['id' => $latestArticle->id]) }}">
                                <div class="section-box">
                                    <h1>{{ $latestArticle->title }}</h1>
                                    <p>
                                        {{ Str::limit($latestArticle->description, 129, '...') }}
                                    </p>
                                    <p class="date">{{ $latestArticle->created_at->format('d M Y') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="section about-card">
        <div class="row row-cols-1 row-cols-md-2 g-6">
            @foreach ($remainingArticles as $article)
                <div class="col">
                    <a href="{{ route('frontend.articleDetails', ['id' => $article->id]) }}">
                        <div class="card h-100">
                            <img src="{{ Storage::url($article->image) }}" class="gambar-3" alt="{{ $article->title }}" />
                            <div class="card-body">
                                <h5 class="card-title mb-3">{{ $article->title }}</h5>
                                <p class="card-text mb-3 me-3">
                                    {{ Str::limit($article->description, 250, '.') }}
                                </p>
                                <p class="date">
                                    {{ $article->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col">
            {{ $articles->links('pagination::bootstrap-5') }}

        </div>
    </div>
@endsection
