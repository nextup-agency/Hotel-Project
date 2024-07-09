@extends('layout.index')
@section('content')
    <style>
        .page-about {
            background-image: url(/profile/assets/images/about.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 714px;
        }

        .page-about-2 {
            background-image: url(/profile/assets/images/about-2.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 739px;
        }

        .page-about-3 {
            background-image: url(/profile/assets/images/about-3.png);
            background-repeat: no-repeat;
            background-size: 100%;
            background-position: center;
            height: 800px;
            width: 837px;
        }
    </style>
    <div class="page-about">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5 ms-5" style="font-size: 32px; color: #ffffff; letter-spacing:3px;">“WHERE LUXURY LIVING
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

    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="box"
                        style=" height:588px; width:850px; background-color:#ffffff; margin-top:80px; position: absolute;">
                        <h1 class="text-center"
                            style="font-size: 36px; padding-top:60px; color:#8E4A24; margin-bottom:60px; font-weight:700; letter-spacing:1.5px;">
                            WORK LIFE HARMONY</h1>
                        <p class="text-center" style="color: #000; font-size:20px; margin-bottom:30px; font-weight:500;">
                            HARBOUR BAY
                            DOWNTOWN
                            AREA - BATAM</p>
                        <p style="font-size: 20px; margin-left:50px; font-weight:500; letter-spacing:1px; width:87%;">
                            The
                            Union Square
                            is an office and condominium twin tower in the heart of Harbour Bay Downtown, steps away
                            from
                            world-class hotels, an international ferry terminal, seaside dining, and nightlife
                            entertainment
                            district. Each of the 37-floor buildings will peak over all other buildings in the
                            neighborhood,
                            providing sweeping views of Batam city and Singapore’s skyline. The Union Square development
                            is
                            unlike any other, where work life balance becomes reality. </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 page-about-2">

                </div>
            </div>
        </div>
    </div>


    {{-- <div class="section" style="margin-bottom: 300px;">
        <div class="container-fluid">
            <div class="about-us-2"
                style="background-image: url(/profile/assets/images/about-2.png); height:739px; background-repeat: no-repeat; background-position: right;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="box" style="width: 859px; height:588px; background-color:#ffffff; margin-top:80px;">
                            <h1 class="text-center"
                                style="font-size: 36px; padding-top:60px; color:#8E4A24; margin-bottom:60px; font-weight:700; letter-spacing:1.5px;">
                                WORK LIFE HARMONY</h1>
                            <p class="text-center"
                                style="color: #000; font-size:20px; margin-bottom:30px; letter-spacing:0.5px; font-weight:500;">
                                HARBOUR BAY
                                DOWNTOWN
                                AREA - BATAM</p>
                            <p style="font-size: 20px; margin-left:50px; font-weight:500; letter-spacing:1px; width:87%;">
                                The
                                Union Square
                                is an office and condominium twin tower in the heart of Harbour Bay Downtown, steps away
                                from
                                world-class hotels, an international ferry terminal, seaside dining, and nightlife
                                entertainment
                                district. Each of the 37-floor buildings will peak over all other buildings in the
                                neighborhood,
                                providing sweeping views of Batam city and Singapore’s skyline. The Union Square development
                                is
                                unlike any other, where work life balance becomes reality. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    {{-- <div class="page-about-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="box"
                        style="width: 819px; height:588px; background-color:#ffffff; margin-left:80%; margin-top:80px;">
                        <h1 class="text-center"
                            style="font-size: 36px; padding-top:50px; color:#8E4A24; margin-bottom:20px; font-weight:700; letter-spacing:1.5px;">
                            LOCATION</h1>
                        <p class="text-center"
                            style="color: #000; font-size:20px; margin-bottom:30px; letter-spacing:0.5px; font-weight:500;">
                            HARBOUR BAY
                            DOWNTOWN
                            AREA - BATAM</p>
                        <p style="font-size: 20px; margin-left:30px; font-weight:500; letter-spacing:1px;">With 3900 sqm
                            of
                            retail space at the
                            lower level, the
                            selections of
                            dining, daily necessities and
                            convenience is just right at your door step. The ease of access such as shopping, lifestyle
                            and
                            business all within steps away. For journey beyond Batam City, Harbour Bay Domestic and
                            International Ferry Terminal can be reached by 2 minutes walking distance.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="/profile/assets/images/US-Logo2.jpg" alt="">
                </div>

                <div class="col-lg-8">
                    <h2 class="ms-5 text-danger">Requirement</h2><br><br>
                    <form action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Phone Number*</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="text-end mt-5">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
