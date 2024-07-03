@extends('layout.index')
@section('content')
    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <h2>Hurry!<br>Get the Best Villa for you</h2>
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    <h2>Be Quick!<br>Get the best villa in town</h2>
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                    <h2>Act Now!<br>Get the highest level penthouse</h2>
                </div>
            </div>
            <div class="item item-4">
                <div class="header-text">
                    <h2>Act Now!<br>Get the highest level penthouse</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="featured section" style="margin-bottom: 150px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <a href=""><img src="/profile/assets/images/Rectangle-1.png" alt=""
                            style="width: 455px; height: 321px;"> </a>
                    <h2 class="mt-5 ms-3">UNION SQUARE RESIDENCE</h2>
                </div>
                <div class="col-lg-6">
                    <img src="/profile/assets/images/Rectangle-2.png" alt="" style="width: 455px; height: 321px;">
                    <h2 class="mt-5 ms-5">UNION SQUARE OFFICE</h2>
                </div>

            </div>
        </div>
    </div>

    <div class="section">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/profile/assets/images/Property-Sky-Lounge.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-Sky-Garden.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-Pool.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
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
