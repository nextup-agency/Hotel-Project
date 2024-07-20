@extends('layout.index')
@section('content')
    <style>
        .residence {
            background-color: rgb(122, 66, 34, 13%);
            padding-top: 50px;
            padding-bottom: 70px;
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
                    <a href="#" class="text-type active" data-target="type-a">STUDIO TYPE A</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-bc">STUDIO TYPE B & C</a>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-dj">1 BEDROOM TYPE D & J</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-ek">1 BEDROOM TYPE E & K</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-fl">1 BEDROOM TYPE F & L</a>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-gm">2 BEDROOM TYPE G & M</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-hn">2 BEDROOM TYPE H & N</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-io">2 BEDROOM TYPE I & O</a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-p">3 BEDROOM TYPE P</a>
                </div>
                <div class="col-12 col-md-4 col-lg-3 mb-3">
                    <a href="#" class="text-type" data-target="type-q">4 BEDROOM TYPE Q</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Description</h3>
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
                            <div class="carousel-item" data-bs-interval="1000">
                                <img src="/profile/assets/images/residence/st-type-a.png" class="d-block w-100"
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

    <div class="section residence-2">
        <div class="container-1">
            <div class="row">
                <div class="col">
                    <img id="imageToChange" src="/profile/assets/images/residence/type-a.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <script>
        const imageMap = {
            'type-a': {
                carousel: ['/profile/assets/images/residence/st-type-a.png'],
                static: '/profile/assets/images/residence/type-a.png'
            },
            'type-bc': {
                carousel: [
                    '/profile/assets/images/residence/st-type-bc-1.png',
                    '/profile/assets/images/residence/st-type-bc-2.png'
                ],
                static: '/profile/assets/images/residence/type-bc.png'
            },
            'type-dj': {
                carousel: [
                    '/profile/assets/images/residence/br-1.png',
                    '/profile/assets/images/residence/br-2.png'
                ],
                static: '/profile/assets/images/residence/type-dj.png'
            },
            'type-ek': {
                carousel: [
                    '/profile/assets/images/residence/br-1.png',
                    '/profile/assets/images/residence/br-2.png'
                ],
                static: '/profile/assets/images/residence/type-ek.png'
            },
            'type-fl': {
                carousel: [
                    '/profile/assets/images/residence/br-1.png',
                    '/profile/assets/images/residence/br-2.png'
                ],
                static: '/profile/assets/images/residence/type-fl.png'
            },
            'type-gm': {
                carousel: [
                    '/profile/assets/images/residence/2br-1.png',
                    '/profile/assets/images/residence/2br-2.png',
                    '/profile/assets/images/residence/2br-3.png'
                ],
                static: '/profile/assets/images/residence/type-gm.png'
            },
            'type-hn': {
                carousel: [
                    '/profile/assets/images/residence/2br-1.png',
                    '/profile/assets/images/residence/2br-2.png',
                    '/profile/assets/images/residence/2br-3.png'
                ],
                static: '/profile/assets/images/residence/type-hn.png'
            },
            'type-io': {
                carousel: [
                    '/profile/assets/images/residence/2br-1.png',
                    '/profile/assets/images/residence/2br-2.png',
                    '/profile/assets/images/residence/2br-3.png'
                ],
                static: '/profile/assets/images/residence/type-io.png'
            },
            'type-p': {
                carousel: [
                    '/profile/assets/images/residence/3br-1.png',
                    '/profile/assets/images/residence/3br-2.png',
                    '/profile/assets/images/residence/3br-3.png'
                ],
                static: '/profile/assets/images/residence/type-p.png'
            },
            'type-q': {
                carousel: [
                    '/profile/assets/images/residence/4br-1.png',
                    '/profile/assets/images/residence/4br-2.png',
                    '/profile/assets/images/residence/4br-3.png'
                ],
                static: '/profile/assets/images/residence/type-q.png'
            }
        };

        document.querySelectorAll('.text-type').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                // Remove active class from all buttons
                document.querySelectorAll('.text-type').forEach(btn => {
                    btn.classList.remove('active');
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

                    // Update static image
                    document.getElementById('imageToChange').src = images.static;

                    // Reset carousel to the first item
                    $('#carouselExampleAutoplaying').carousel(0);
                }
            });
        });

        window.addEventListener('load', function() {
            // Simulate a click on the button with data-target='type-a'
            const defaultButton = document.querySelector('.text-type[data-target="type-a"]');
            if (defaultButton) {
                defaultButton.click();
            }
        });
    </script>
@endsection
