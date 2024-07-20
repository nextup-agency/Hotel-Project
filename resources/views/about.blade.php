@extends('layout.index')
@section('content')
    <style>
        .page-about {
            background-image: url(/profile/assets/images/about.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 357px;
        }

        .section-header {
            font-size: 32px;
            color: #fff;
            letter-spacing: 2px;
        }

        /* Start Section box */

        .section-box {
            background-color: white;
            padding: 20px;
            margin-top: 70px;
        }

        .section-box h3 {
            font-size: 36px;
            color: #8E4A24;
            font-weight: 700;
            letter-spacing: 1px;
            margin-top: 30px;
            margin-bottom: 60px;
        }

        .section-box p {
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 2px;
            margin-right: 20px;
        }


        /* End Section box 1 */

        .section-box2 {
            background-color: white;
            padding: 20px 20px 20px 20px;
            margin-top: 70px;
        }

        .section-box2 h3 {
            font-size: 36px;
            color: #8E4A24;
            font-weight: 700;
            letter-spacing: 1px;
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .section-box2 h5 {
            font-size: 20px;
            color: #000;
            font-weight: 500;
            letter-spacing: 2px;
            margin-bottom: 60px;
        }

        .section-box2 p {
            font-size: 20px;
            font-weight: 500;
            letter-spacing: 2px;
            margin-right: 20px;
        }

        .text-2 {
            font-size: 20px;
            font-weight: 400;
            letter-spacing: 1px;
            margin-bottom: 60px;
        }

        @media (min-width: 992px) {
            .page-about {
                background-image: url(/profile/assets/images/about.png);
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                height: 714px;
            }

            .section-box {
                position: absolute;
                width: 871px;
                height: 588px;
            }

            .section-box2 {
                height: 588px;
                width: 819px;
                margin-left: 10px;
            }

            .gambar-1 {
                float: right;
                width: 802px;
                height: 739px;
                background-size: cover;
            }

            .gambar-2 {
                float: left;
                width: 862px;
                height: 739px;
                background-size: cover
            }

            .section-about {
                margin-top: 100px;
                margin-bottom: 200px;
            }
    </style>
    <div class="page-about">
        <div class="container-header">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5 ms-5 section-header">“WHERE LUXURY LIVING
                        <br>
                        REACHES NEW HEIGHTS”
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <h3 class="text-center" style="color: #8E4A24; font-weight:600; font-size: 47px;">ABOUT
                    US</h3>
            </div>
        </div>
    </div>

    <div class="section-about">
        <div class="container-about">
            <div class="row">
                <div class="col-12 col-md-6 mb-3">
                    <div class="section-box">
                        <h3 class="text-center">WORK LIFE HARMONY</h3>
                        <p>The Union Square is an office and condominium twin tower in the heart of Harbour Bay Downtown,
                            steps away from world-class hotels, an international ferry terminal, seaside dining, and
                            nightlife entertainment district. Each of the 37-floor buildings will peak over all other
                            buildings in the neighborhood, providing sweeping views of Batam city and Singapore’s skyline.
                            The Union Square development is unlike any other, where work life balance becomes reality.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 ">
                    <img src="/profile/assets/images/about-2.png" class="gambar-1" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container-about">
            <div class="row">
                <div class="col-12 col-md-5">
                    <img src="/profile/assets/images/about-3.png" class="gambar-2" alt="">
                </div>
                <div class="col-12 col-md-7">
                    <div class="container">
                        <div class="section-box2">
                            <h3 class="text-center">LOCATION</h3>
                            <h5 class="text-center">HARBOUR BAY DOWNTOWN AREA - BATAM</h5>
                            <p>With 3900 sqm of retail space at the lower level, the selections of dining, daily necessities
                                and
                                convenience is just right at your door step. The ease of access such as shopping, lifestyle
                                and
                                business all within steps away. For journey beyond Batam City, Harbour Bay Domestic and
                                International Ferry Terminal can be reached by 2 minutes walking distance.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
