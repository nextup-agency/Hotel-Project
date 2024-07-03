@extends('layout.index')
@section('content')
    <div class="contact-us">
        <div class="row">
            <div class="col-lg-12">
                <img src="/profile/assets/images/FACADE-13-1.png" class="img-fluid" alt="...">
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h3 class="text-center" style="color: #8E4A24; margin-bottom: 100px">CONTACT US</h3>
            <div class="row">
                <div class="col-lg-2" style="width: 110px;">
                    <i class="fa fa-map-marker" style="font-size:69px;color:red"></i>
                </div>

                <div class="col-lg-6">
                    <h3 style="color: #8E4A24; font-weight: 500;">Identity Office Location</h3>
                    <p style="width: 350px;">Harbour Bay Downtown, Jl. Duyung, Sei Jodoh, Kec. Batu Ampar, Kota Batam,
                        Kepulauan Riau 29453</p>
                </div>

                <div class="col-lg-5 d-flex justify-content-end">
                    <a href="#"><i class="fab fa-whatsapp" style="font-size:79px;color:red"></i></a>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-2" style="width: 110px;">
                    <i class="fa fa-phone" style="font-size:69px;color:red"></i>
                </div>

                <div class="col-lg-6">
                    <h3 style="color: #8E4A24; font-weight: 500;">Contact Number</h3>
                    <p style="width: 350px;">0811-7796-999</p>
                </div>

                <div class="col-lg-5 d-flex justify-content-end">
                    <a href="#"><i class="fab fa-linkedin" style="font-size:79px;"></i></a>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-lg-2" style="width: 110px;">
                    <i class="fa fa-envelope" style="font-size:69px;color:red"></i>
                </div>

                <div class="col-lg-6">
                    <h3 style="color: #8E4A24; font-weight: 500;">Contact Email</h3>
                    <p style="width: 350px;">info@unionsquarebatam.com</p>
                </div>

                <div class="col-lg-5 d-flex justify-content-end">
                    <a href="#"><i class="fab fa-instagram" style="font-size:79px;"></i></a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 d-flex justify-content-end">
                    <a href="#"><i class="fab fa-facebook" style="font-size:79px;"></i></a>
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
