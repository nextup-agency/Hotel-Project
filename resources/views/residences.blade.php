@extends('layout.index')
@section('content')
    <style>
        .residence {
            background-color: rgba(122, 66, 34, 0.13);
            padding-top: 50px;
            padding-bottom: 70px;
        }

        .description {
            padding-top: 120px;
            background-color: rgba(205, 118, 69, 0.05);
            padding-bottom: 120px;
        }

        .box-description {
            background-color: #fff;
            padding-right: 60px;
            padding-left: 30px;
            padding-bottom: 30px;
        }

        .text-type {
            font-size: 20px;
            color: #000;
            font-weight: 600;
        }

        .text-type.active {
            background-color: #C85C20;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-right: 10px;
            padding-left: 10px;
            color: #fff;
            border-radius: 17px;
        }

        .text-residence-h3 {
            font-size: 20px;
            color: #000;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .text-residence-h4 {
            font-size: 18px;
            color: rgba(0, 0, 0, 0.59);
            font-weight: 600;
            margin-bottom: 30px;
            margin-top: 30px;
        }

        .text-residence-p {
            font-size: 16px;
            color: rgba(0, 0, 0, 0.59);
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

    <div class="description">
        <div class="container box-description">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-residence-h4">Description</h4>
                    <h3 class="text-residence-h3">Project Information</h3>
                    <p class="text-residence-p">Developer : PT Citra Buana Prakarsa</p>
                    <p class="text-residence-p">Kontraktor : PT Citra Buana Prakarsa</p>
                    <p class="text-residence-p">Type : Studio, 1 Bedroom, 2 Bedroom, 3 Bedroom, 3 Bedroom and Office Space
                    </p>
                    <p class="text-residence-p">Building : 2 Tower</p>
                    <p class="text-residence-p">Floor: 37 Lantai</p>
                    <p class="text-residence-p">Total : 300 unit-an</p>
                    <p class="text-residence-p">Exp : Desember 2024</p>
                    <p class="text-residence-p">Address : Nagoya</p>
                    <p class="text-residence-p">Location : Harbour Bay, Nagoya, Batam, Kepulauan Riau, Indonesia</p>
                    <p class="text-residence-p">Tenor : 36 month</p>
                    <h3 class="text-residence-h3">Tipe Unit </h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Tipe Unit</th>
                                <th scope="col">Size</th>
                                <th scope="col">Prices</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Studio</td>
                                <td>36-50 m2</td>
                                <td>Rp 912,912,000</td>
                            </tr>
                            <tr>
                                <td>1 Bedroom</td>
                                <td>55-78 m2</td>
                                <td>Rp 1,379,400,000</td>
                            </tr>
                            <tr>
                                <td>2 Bedroom</td>
                                <td>88-126 m2</td>
                                <td>Rp 2,401,828,000</td>
                            </tr>
                            <tr>
                                <td>3 Bedroom</td>
                                <td>140 m2</td>
                                <td>Rp 4,458,373,975</td>
                            </tr>
                            <tr>
                                <td>4 Bedroom</td>
                                <td>184 m2</td>
                                <td>Rp 5,861,163,113</td>
                            </tr>
                        </tbody>
                    </table>
                    <h3 class="text-residence-h3">Deskripsi</h3>
                    <p class="text-residence-p">Union Square Batam merupakan apartment dengan segmentasi high-end, terlihat
                        dengan luasan unit sd 184m2, Union Square di sebut juga sebagai menara kembar selain Residences juga
                        Office pada salah satu Towernya. Kawasan HarbourBay Downtown telah terbentuk diantaranya integrated
                        Ferry Terminal Harbour Bay, Hotel Marriot 5star, Hotel Swiss Bell, Zest juga Resto and Bar Seafood
                        yang terkenal di Batam.</p><br>
                    <p class="text-residence-p">Bangunan terdiri atas 2 tower dengan 37 lantai, yang masing-masing towernya
                        diperuntukan untuk Residences dan Ofiice space. Value apartment adalah, Lokasi Integrated Ferry
                        Terminal HarbourBay , Pemandangan Laut dan Singapore, Lokasi di pusat kota Nagoya, Batam.</p>

                    <h3 class="text-residence-h3">Cara Pemesanan Union Square</h3>
                    <P class="text-residence-p">1. Mengetahui value Union Square</P>
                    <P class="text-residence-p">2. Hubungi 0812-1213-6654</P>
                    <P class="text-residence-p">3. Melakukan transfer Booking Fee Apartment Rp. 10,000,000 ke</P>
                    <P class="text-residence-p">No Rek 5363-0191-11</P>
                    <P class="text-residence-p">an PT. Citra Buana Batam Industri</P>
                    <P class="text-residence-p">(berita #unit/nama anda)</P>
                    <P class="text-residence-p">4. Hubungi untuk konfirmasi pembayaran</P>
                </div>
            </div>
        </div>
    </div>

    <div class="residence-1">
        <div class="container-1">
            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner" id="carouselImages">
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="/profile/assets/images/residence/st-type-a.png" class="d-block w-100"
                                    alt="...">
                            </div>
                        </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            const carouselElement = document.getElementById('carouselExampleAutoplaying');
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: 2000, // Ubah menjadi interval yang diinginkan, misalnya 2000ms
                ride: 'carousel'
            });

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

                    document.querySelectorAll('.text-type').forEach(btn => {
                        btn.classList.remove('active');
                    });

                    this.classList.add('active');

                    const target = this.getAttribute('data-target');
                    const images = imageMap[target];
                    if (images) {
                        const carouselInner = document.getElementById('carouselImages');
                        carouselInner.innerHTML = '';

                        images.carousel.forEach((src, index) => {
                            const div = document.createElement('div');
                            div.className = 'carousel-item' + (index === 0 ? ' active' :
                                '');
                            const img = document.createElement('img');
                            img.src = src;
                            img.className = 'd-block w-100';
                            div.appendChild(img);
                            carouselInner.appendChild(div);
                        });

                        document.getElementById('imageToChange').src = images.static;

                        // Reset carousel to the first item
                        const bootstrapCarousel = new bootstrap.Carousel(carouselElement);
                        bootstrapCarousel.to(0);
                    }
                });
            });

            // Auto-select the default button on page load
            const defaultButton = document.querySelector('.text-type[data-target="type-a"]');
            if (defaultButton) {
                defaultButton.click();
            }
        });
    </script>
@endsection
