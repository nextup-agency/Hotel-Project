@extends('layout.index')
@section('content')
    <style>
        .residence {
            background-color: rgb(122, 66, 34, 13%);
            padding-top: 50px;
            padding-bottom: 70px;
        }

        .office-2 {
            background-color: #CCCCCC;
            padding-bottom: 10px;
        }


        .text-type {
            font-size: 20px;
            color: #000;
            font-weight: 600;
        }

        .text-type.active {
            background-color: #C85C20;
            padding: 10px 20px;
            color: #fff;
            border-radius: 17px;
        }
    </style>
    <div class="residence">
        <div class="container text-center">
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type active" data-target="staff-area">STAFF AREA</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="director-room">DIRECTOR ROOM</a>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="receptionist">RECEPTIONIST</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="meeting-area">MEETING AREA</a>
                </div>
            </div>
        </div>
    </div>


    <div class="section residence-1">
        <div class="container-1">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" id="carouselImages">
                            <div class="carousel-item active">
                                <img src="/profile/assets/images/office/staff-area-1.png" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
                        {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section office-2">
        <div class="container-1">
            <div class="row justify-content-center">
                <div class="col-auto">
                    <img src="/profile/assets/images/office/denah-office.png" alt=""
                        style="width: 598px; height: 979px;">
                </div>
            </div>
        </div>
    </div>




    <script>
        const imageMap = {
            'staff-area': {
                carousel: ['/profile/assets/images/office/staff-area-1.png',
                    '/profile/assets/images/office/staff-area-2.png',
                    '/profile/assets/images/office/staff-area-3.png',
                    '/profile/assets/images/office/staff-area-4.png',
                    '/profile/assets/images/office/staff-area-5.png'
                ],
            },
            'director-room': {
                carousel: [
                    '/profile/assets/images/office/director-room-1.png',
                    '/profile/assets/images/office/director-room-2.png'
                ],
            },
            'receptionist': {
                carousel: [
                    '/profile/assets/images/office/receptionist.png',
                ],
            },
            'meeting-area': {
                carousel: [
                    '/profile/assets/images/office/meeting-area-1.png',
                    '/profile/assets/images/office/meeting-area-2.png'
                ],
            }
        };

        document.querySelectorAll('.text-type').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Remove active class from all buttons
                document.querySelectorAll('.text-type').forEach(button => {
                    button.classList.remove('active');
                });

                // Add active class to the clicked button
                this.classList.add('active');

                const target = this.getAttribute('data-target');
                const images = imageMap[target];
                if (images) {
                    // Clear current carousel images
                    const carouselInner = document.getElementById('carouselImages');
                    carouselInner.innerHTML = '';

                    // Add new images to carousel
                    images.carousel.forEach((src, index) => {
                        const div = document.createElement('div');
                        div.className = 'carousel-item' + (index === 0 ? ' active' : '');
                        const img = document.createElement('img');
                        img.src = src;
                        img.className = 'd-block w-100';
                        div.appendChild(img);
                        carouselInner.appendChild(div);
                    });


                    // Reset carousel to the first item
                    $('#carouselExampleAutoplaying').carousel(0);
                }
            });
        });
    </script>
@endsection
