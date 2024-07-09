@extends('layout.index')
@section('content')
    <style>
        @media (min-width: 992px) {
            .custom-width {
                max-width: 50%;
            }
        }
    </style>
    <div class="contact-us">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/profile/assets/images/contact-1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-3.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-2.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-5.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-6.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/profile/assets/images/Property-7.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h3 class="text-center" style="color: #8E4A24; margin-bottom: 100px; font-weight: 600; font-size: 47px;">
                CONTACT US
            </h3>


            <div class="row align-items-center">
                <div class="col-12 col-md-1 text-center mb-3 mb-md-0">
                    <a href="#"><img src="/profile/assets/images/location-pin.svg" alt="Location Icon"
                            style="width: 69px;"></a>
                </div>
                <div class="col-12 col-md-9 mb-3 mb-md-0 ">
                    <h3 style="color: #8E4A24; font-weight: 500; font-size: 32px;">Identity Office Location</h3>
                    <p class="custom-width" style="font-weight: 500; font-size: 20px;">
                        Harbour Bay Downtown, Jl. Duyung, Sei Jodoh, Kec. Batu Ampar, Kota Batam, Kepulauan Riau 29453
                    </p>
                </div>
                <div class="col-12 col-md-2 text-center text-md-right mb-3 mb-md-0">
                    <a href="#" target="_blank"><img src="/profile/assets/images/whatsapp.svg" alt="WhatsApp Icon"
                            style="width: 69px;"></a>
                </div>
            </div>

            <div class="row align-items-center" style="margin-top: 60px;">
                <div class="col-12 col-md-1 text-center mb-3 mb-md-0">
                    <img src="/profile/assets/images/phone-call.svg" alt="Phone Icon" style="width: 69px;">
                </div>
                <div class="col-12 col-md-9 mb-3 mb-md-0">
                    <h3 style="color: #8E4A24; font-weight: 500; font-size: 32px;">Contact Number</h3>
                    <p style="font-weight: 500; font-size: 20px;">0811-7796-999</p>
                </div>
                <div class="col-12 col-md-2 text-center text-md-right">
                    <a href="#" target="_blank"><img src="/profile/assets/images/linkedin.svg" alt="LinkedIn Icon"
                            style="width: 69px;"></a>
                </div>
            </div>

            <div class="row align-items-center" style="margin-top: 80px;">
                <div class="col-12 col-md-1 text-center mb-3 mb-md-0">
                    <img src="/profile/assets/images/email.svg" alt="Email Icon" style="width: 69px;">
                </div>
                <div class="col-12 col-md-9 mb-3 mb-md-0">
                    <h3 style="color: #8E4A24; font-weight: 500; font-size: 32px;">Contact Email</h3>
                    <p style="font-weight: 500; font-size: 20px;">info@unionsquarebatam.com</p>
                </div>
                <div class="col-12 col-md-2 text-center text-md-right">
                    <a href="#" target="_blank"><img src="/profile/assets/images/instagram.svg" alt="Instagram Icon"
                            style="width: 69px;"></a>
                </div>
            </div>

            <div class="row align-items-center mt-5">
                <div class="col-12 col-md-10"></div>
                <div class="col-12 col-md-2 text-center text-md-right">
                    <a href="#" target="_blank"><img src="/profile/assets/images/facebook.svg" alt="Facebook Icon"
                            style="width: 69px;"></a>
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
                            <label for="exampleFormControlInput1" class="form-label">Email*</label>
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
