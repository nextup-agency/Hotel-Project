@extends('layout.index')
@section('content')
    <style>
        .union p {
            font-size: 24px;
            color: #fff;
            margin-bottom: 10px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .union h1 {
            font-size: 36px;
            color: #fff;
            font-weight: 900;
            letter-spacing: 0.5px;

        }

        .sky h1 {
            margin-top: 30px;
            margin-bottom: 20px;
            font-size: 36px;
            color: #000;
            font-weight: 700;
        }

        .sky p {
            font-size: 20px;
            font-weight: 500;
            color: #000;
        }
    </style>
    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="union text-center">
                    <p>UNION SQUARE</p>
                    <h1>FIND A PERFECT DREAM HOUSE</h1>
                </div>
            </div>
            <div class="item item-2">
                <div class="union text-center">
                    <p>UNION SQUARE</p>
                    <h1>FIND A PERFECT DREAM HOUSE</h1>
                </div>
            </div>
            <div class="item item-3">
                <div class="union text-center">
                    <p>UNION SQUARE</p>
                    <h1>FIND A PERFECT DREAM HOUSE</h1>
                </div>
            </div>
            <div class="item item-4">
                <div class="union text-center">
                    <p>UNION SQUARE</p>
                    <h1>FIND A PERFECT DREAM HOUSE</h1>
                </div>
            </div>
        </div>
    </div>



    <div class="section">
        <div class="selection">
            <div class="container">
                <div class="row gx-18">
                    <div class="col-lg-6">
                        <a href="{{ route('frontend.residences') }}"><img src="/profile/assets/images/Rectangle-1.png"
                                alt=""></a>
                        <h3 class="text-center mt-4 mb-5" style="font-size: 24px;">UNION SQUARE RESIDENCE</h3>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('frontend.office') }}"><img src="/profile/assets/images/Rectangle-2.png"
                                alt=""></a>
                        <h3 class="text-center mt-4" style="font-size: 24px;">UNION SQUARE OFFICE</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section contact-us">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="/profile/assets/images/sky-1.png" class="d-block w-100" alt="...">
                            <div class="sky text-center">
                                <h1>SKY LOUNGE </h1>
                                <p>At the end of a work day, you can enjoy a well-deserved drink over panoramic</p>
                                <p>sunset views
                                    at the Sky Lounge Cafe located on the top floor. </p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/profile/assets/images/sky-2.png" class="d-block w-100" alt="...">
                            <div class="sky text-center">
                                <h1>SKY GARDEN </h1>
                                <p>The 19th floor Sky Garden features an unobstructed view of the Singapore strait,</p>
                                <p>providing the perfect spot ti wind down at the end of a busy day.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/profile/assets/images/sky-3.png" class="d-block w-100" alt="...">
                            <div class="sky text-center">
                                <h1>POOL</h1>
                                <p>Enjoy the best facilities Union Residences has to provide. Located on the 8th Storey, 20
                                    meters</p>
                                <p>above sea level. Residents can enjoy their day on the lounges or dip into the
                                    swimming pools.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/profile/assets/images/sky-4.png" class="d-block w-100" alt="...">
                            <div class="sky text-center">
                                <h1>GYM</h1>
                                <p>Gym Center Provides specialist exercise equipment to keep residents fit and healthy.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/profile/assets/images/sky-5.png" class="d-block w-100" alt="...">
                            <div class="sky text-center">
                                <h1>PLAYGROUND</h1>
                                <p>Kids Pool and Playground is available for children playdates.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="/profile/assets/images/sky-6.png" class="d-block w-100" alt="...">
                            <div class="sky text-center">
                                <h1>BBQ</h1>
                                <p>Arrange a special event with friends and family in the BBQ area. Or just read and enjoy
                                    our </p>
                                <p> greenery in the Sky Garden at 19th Storey. Unveil your story with us.</p>
                            </div>
                        </div>
                    </div>
                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="section map">
        <div class="row">
            <div class="col-lg-12">
                <div id="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.026693357693!2d103.9986529!3d1.1557184!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d98b6e4812ff83%3A0xe61d70c63d44d8b2!2sUnion%20Square%20Batam!5e0!3m2!1sid!2sid!4v1719896690512!5m2!1sid!2sid"
                        width="100%" height="600px" frameborder="0"
                        style="border:0; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection
