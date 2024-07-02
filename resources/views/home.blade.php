@extends('layout.index')
@section('content')
    <div class="main-banner">
        <div class="owl-carousel owl-banner">
            <div class="item item-1">
                <div class="header-text">
                    <span class="category">Toronto, <em>Canada</em></span>
                    <h2>Hurry!<br>Get the Best Villa for you</h2>
                </div>
            </div>
            <div class="item item-2">
                <div class="header-text">
                    <span class="category">Melbourne, <em>Australia</em></span>
                    <h2>Be Quick!<br>Get the best villa in town</h2>
                </div>
            </div>
            <div class="item item-3">
                <div class="header-text">
                    <span class="category">Miami, <em>South Florida</em></span>
                    <h2>Act Now!<br>Get the highest level penthouse</h2>
                </div>
            </div>
            <div class="item item-4">
                <div class="header-text">
                    <span class="category">Miami, <em>South Florida</em></span>
                    <h2>Act Now!<br>Get the highest level penthouse</h2>
                </div>
            </div>
        </div>
    </div>



    <div class="featured section" style="margin-bottom: 250px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image">
                        <a href=""><img src="/profile/assets/images/Rectangle-1.png" alt=""
                                style="width: 455px; height: 321px;"> </a>
                        <h2 class="mt-3">UNION SQUARE RESIDENCE</h2>
                        {{-- <a href="/profile/property-details.html"><img src="/profile/assets/images/featured-icon.png"
                                alt="" style="max-width: 60px; padding: 0px;"></a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image">
                        <img src="/profile/assets/images/Rectangle-2.png" alt=""
                            style="width: 455px; height: 321px;">
                        <h2 class="mt-3">UNION SQUARE OFFICE</h2>
                        {{-- <a href="/profile/property-details.html"><img src="/profile/assets/images/featured-icon.png"
                                alt="" style="max-width: 60px; padding: 0px;"></a> --}}
                    </div>
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
                        style="border:0; border-radius: 10px; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);"
                        allowfullscreen=""></iframe>
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
                    <h2>Requirement</h2><br><br>
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name*</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Phone Number*</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="text-right" style="text-align: right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
